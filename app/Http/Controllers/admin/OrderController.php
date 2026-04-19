<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\MenuItem;
use App\Models\Table;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class OrderController extends Controller
{
    /**
     * Display a listing of orders.
     */
    public function index(Request $request)
    {
        $query = Order::with(['customer', 'diningTable', 'user'])->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('order_no', 'LIKE', "%{$search}%");
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('type')) {
            $query->where('order_type', $request->type);
        }

        $orders = $query->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     */
    public function create(Request $request)
    {
        $menuItems = MenuItem::where('status', 'available')->get();
        $tables = Table::where('status', 'available')->get();
        $customers = Customer::all();
        $categories = Category::all();

        $existingOrder = null;
        if ($request->has('order_id')) {
            $existingOrder = Order::with('items.menuItem')->find($request->order_id);
            // If order is already completed, redirect back
            if ($existingOrder && $existingOrder->status === 'completed') {
                return redirect()->route('orders.show', $existingOrder->id)->with('error', 'This order is already completed.');
            }
        }

        return view('admin.orders.checkout', compact('menuItems', 'tables', 'customers', 'categories', 'existingOrder'));
    }

    /**
     * Store a newly created order.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'nullable', // NEW: support existing order
            'order_type' => 'required|in:dine_in,takeaway,delivery',
            'table_id' => 'required_if:order_type,dine_in|nullable|exists:tables,id',
            'customer_id' => 'nullable|exists:customers,id',
            'items' => 'required|array|min:1',
            'items.*.menu_item_id' => 'required|exists:menu_items,id',
            'items.*.quantity' => 'required|integer|min:1',
            // Payment fields (Optional for POS unified flow)
            'payment_method' => 'nullable|in:cash,card,qr,khqr',
            'paid_amount' => 'nullable|numeric',
        ]);

        return DB::transaction(function () use ($request) {
            if ($request->filled('order_id')) {
                $order = Order::find($request->order_id);
                // Clear existing items to refresh from cart
                $order->items()->delete();
                $order->update([
                    'order_type' => $request->order_type,
                    'customer_id' => $request->customer_id,
                    'table_id' => $request->table_id,
                    'notes' => $request->notes,
                ]);
            } else {
                $order = Order::create([
                    'order_no' => 'ORD-' . strtoupper(uniqid()),
                    'order_type' => $request->order_type,
                    'customer_id' => $request->customer_id,
                    'user_id' => auth()->id(),
                    'table_id' => $request->table_id,
                    'notes' => $request->notes,
                    'status' => 'pending',
                ]);
            }

            $total = 0;
            foreach ($request->items as $itemData) {
                $menuItem = MenuItem::find($itemData['menu_item_id']);
                $quantity = $itemData['quantity'];
                $price = $menuItem->price;
                $subtotal = $price * $quantity;

                $order->items()->create([
                    'menu_item_id' => $menuItem->id,
                    'quantity' => $quantity,
                    'price' => $price,
                    'subtotal' => $subtotal,
                ]);

                $total += $subtotal;
            }

            $taxRateSetting = \App\Helper\SystemHelper::getSetting('tax_percentage', 10) / 100;
            $tax = $total * $taxRateSetting;
            $totalAmount = $total + $tax;
            $order->update([
                'subtotal' => $total,
                'tax' => $tax,
                'total_amount' => $totalAmount,
            ]);

            // Handle Immediate Payment if provided (POS Flow)
            if ($request->filled('payment_method')) {
                $paid = $request->paid_amount ?? $totalAmount;
                $change = max(0, $paid - $totalAmount);

                $order->payment()->updateOrCreate(
                    ['order_id' => $order->id],
                    [
                        'payment_method' => $request->payment_method,
                        'total_amount' => $totalAmount,
                        'paid_amount' => $paid,
                        'change_amount' => $change,
                        'status' => 'paid',
                        'paid_at' => now(),
                    ]
                );

                $order->update(['status' => 'completed']);

                // Release table immediately if completed
                if ($request->order_type === 'dine_in' && $request->table_id) {
                    Table::where('id', $request->table_id)->update(['status' => 'available']);
                }
            } elseif ($request->order_type === 'dine_in' && $request->table_id) {
                // Just occupy table if not paid yet or it's an update to a pending dine-in
                Table::where('id', $request->table_id)->update(['status' => 'occupied']);
            }

            if ($request->wantsJson()) {
                session()->flash('success', 'Order processed successfully!');
                return response()->json(['success' => true, 'message' => 'Order processed successfully!', 'order_id' => $order->id]);
            }

            return redirect()->route('orders.index')->with('success', 'Order processed successfully!');
        });
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(Order $order)
    {
        $categories = Category::all();
        $menuItems = MenuItem::with('category')->get();
        $tables = Table::all();
        $customers = Customer::all();
        
        // Eager load items and menu items
        $existingOrder = $order->load('items.menuItem');
        
        return view('admin.orders.edit', compact('menuItems', 'tables', 'customers', 'categories', 'existingOrder'));
    }

    /**
     * Display the specified order.
     */
    public function show(Order $order)
    {
        $order->load(['items.menuItem', 'customer', 'diningTable', 'user', 'payment']);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Update the order status.
     */
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,preparing,ready,completed,cancelled',
        ]);

        $oldStatus = $order->status;
        $order->update(['status' => $request->status]);

        // Release table if completed or cancelled
        if (in_array($request->status, ['completed', 'cancelled']) && $order->table_id) {
            $order->diningTable->update(['status' => 'available']);
        }

        session()->flash('success', 'Order status updated to ' . ucfirst($request->status));
        return redirect()->back();
    }

    /**
     * Remove the specified order.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}
