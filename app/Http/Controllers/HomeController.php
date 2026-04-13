<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\MenuItem;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        // Order Status Counts
        $orderStats = Order::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();

        // Ensure all statuses exist in array
        $statuses = ['pending', 'preparing', 'ready', 'completed', 'cancelled'];
        foreach($statuses as $status) {
            if(!isset($orderStats[$status])) $orderStats[$status] = 0;
        }

        // Today's Financials
        $todayIncome = Payment::whereDate('paid_at', today())->sum('total_amount');
        $todayOrders = Order::whereDate('created_at', today())->count();

        // Recent Activity
        $recentOrders = Order::with(['customer', 'diningTable'])
            ->latest()
            ->limit(6)
            ->get();

        // Inventory Alerts (Low stock if implemented, otherwise just count)
        $totalItems = MenuItem::count();
        $totalTables = Table::count();
        $activeTables = Table::where('status', 'occupied')->count();

        return view('home', compact(
            'orderStats', 
            'todayIncome', 
            'todayOrders', 
            'recentOrders',
            'totalItems',
            'totalTables',
            'activeTables'
        ));
    }
}
