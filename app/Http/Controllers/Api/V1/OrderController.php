<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\MenuItem;
use App\Models\Table;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Store a newly created order.
     * Optimize for performance by batching or minimizing queries.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'nullable|exists:orders,id',
            'order_type' => 'required|in:dine_in,takeaway,delivery',
            'table_id' => 'required_if:order_type,dine_in|nullable|exists:tables,id',
            'customer_id' => 'nullable|exists:customers,id',
            'items' => 'required|array|min:1',
            'items.*.menu_item_id' => 'required|exists:menu_items,id',
            'items.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'nullable|in:cash,card,qr,khqr',
            'paid_amount' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        return DB::transaction(function () use ($request) {
            $orderId = $request->order_id;
            
            if ($orderId) {
                $order = Order::find($orderId);
                // Optimize: Use delete() instead of looping if items are many
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
                    'user_id' => auth()->id() ?? 1, // Fallback to 1 if no auth for now
                    'table_id' => $request->table_id,
                    'notes' => $request->notes,
                    'status' => 'pending',
                ]);
            }

            $total = 0;
            $itemsToInsert = [];
            
            // Performance Optimization: Fetch all needed menu items in one query
            $menuItemIds = collect($request->items)->pluck('menu_item_id')->unique();
            $menuItems = MenuItem::whereIn('id', $menuItemIds)->get()->keyBy('id');

            foreach ($request->items as $itemData) {
                $menuItem = $menuItems->get($itemData['menu_item_id']);
                if (!$menuItem) continue;

                $quantity = $itemData['quantity'];
                $price = $menuItem->price;
                $subtotal = $price * $quantity;
                $total += $subtotal;

                $itemsToInsert[] = [
                    'order_id' => $order->id,
                    'menu_item_id' => $menuItem->id,
                    'quantity' => $quantity,
                    'price' => $price,
                    'subtotal' => $subtotal,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Batch insert for performance
            OrderItem::insert($itemsToInsert);

            $taxRateSetting = \App\Helper\SystemHelper::getSetting('tax_percentage', 10) / 100;
            $tax = $total * $taxRateSetting;
            $totalAmount = $total + $tax;

            $order->update([
                'subtotal' => $total,
                'tax' => $tax,
                'total_amount' => $totalAmount,
            ]);

            // Handle Immediate Payment
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

                if ($request->order_type === 'dine_in' && $request->table_id) {
                    Table::where('id', $request->table_id)->update(['status' => 'available']);
                }
            } elseif ($request->order_type === 'dine_in' && $request->table_id) {
                Table::where('id', $request->table_id)->update(['status' => 'occupied']);
            }

            return response()->json([
                'success' => true, 
                'message' => 'Order processed successfully!', 
                'order_id' => $order->id,
                'order' => $order->load('items.menuItem', 'payment')
            ]);
        });
    }
}
