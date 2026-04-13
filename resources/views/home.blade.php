@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="dashboard-page p-3 p-md-4">
    <!-- Hero / Welcome -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-5 gap-3">
        <div>
            <h1 class="fw-black mb-1" style="color: #0f172a; letter-spacing: -1px;">{{ __('Dashboard Overview') }}</h1>
            <p class="text-muted fw-bold small text-uppercase mb-0 tracking-wider">{{ __('Welcome back') }}, {{ auth()->user()->name }} • {{ __('Managing Service for') }} {{ date('M d, Y') }}</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('orders.create') }}" class="btn btn-premium-action shadow-sm">
                <i data-lucide="plus-circle" class="me-2"></i> {{ __('New Order') }}
            </a>
        </div>
    </div>

    <!-- Order Status Mosaic -->
    <div class="row g-4 mb-5">
        <div class="col-xl-2 col-md-4 col-6">
            <div class="status-tile pending">
                <div class="tile-icon"><i data-lucide="clock"></i></div>
                <div class="tile-value">{{ $orderStats['pending'] }}</div>
                <div class="tile-label">New / Pending</div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
            <div class="status-tile preparing">
                <div class="tile-icon"><i data-lucide="flame"></i></div>
                <div class="tile-value">{{ $orderStats['preparing'] }}</div>
                <div class="tile-label">Preparing</div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
            <div class="status-tile ready">
                <div class="tile-icon"><i data-lucide="package-check"></i></div>
                <div class="tile-value">{{ $orderStats['ready'] }}</div>
                <div class="tile-label">Ready to Serve</div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6">
            <div class="status-tile completed">
                <div class="tile-icon"><i data-lucide="check-circle-2"></i></div>
                <div class="tile-value">{{ $orderStats['completed'] }}</div>
                <div class="tile-label">Served / Paid</div>
            </div>
        </div>
        <div class="col-xl-4 col-md-8 col-12">
            <div class="income-master-tile d-flex align-items-center h-100 p-4 rounded-lg bg-premium-orange shadow-lg text-white">
                <div class="flex-grow-1">
                    <span class="extra-small fw-black text-white text-opacity-75 text-uppercase mb-1 d-block">Today's Total Income</span>
                    <h2 class="fw-black mb-0 display-6">${{ number_format($todayIncome, 2) }}</h2>
                </div>
                <div class="income-badge bg-white text-primary p-3 rounded-circle shadow-sm">
                    <i data-lucide="trending-up" style="width: 32px; height: 32px;"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Live Table Occupancy -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
                <div class="card-header bg-white border-0 p-4 pb-0">
                    <h5 class="fw-black mb-0">Dining Status</h5>
                    <p class="text-muted small">Real-time table occupancy</p>
                </div>
                <div class="card-body p-4 text-center">
                    <div class="occupancy-gauge mb-4 mx-auto" style="width: 180px; height: 180px; border: 15px solid #f1f5f9; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: relative;">
                        <div class="content">
                            <h1 class="fw-black mb-0 display-4" style="color: #f08913;">{{ $activeTables }}</h1>
                            <span class="text-muted small fw-bold text-uppercase">Occupied</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-4">
                        <div class="text-center">
                            <div class="fw-black h5 mb-0 text-dark">{{ $totalTables - $activeTables }}</div>
                            <small class="text-muted fw-bold">Free</small>
                        </div>
                        <div class="text-center">
                            <div class="fw-black h5 mb-0 text-dark">{{ $totalTables }}</div>
                            <small class="text-muted fw-bold">Total</small>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light border-0 p-3 text-center">
                    <a href="{{ route('tables.index') }}" class="btn btn-sm btn-white border fw-bold text-uppercase px-3">Manage Tables</a>
                </div>
            </div>
        </div>

        <!-- Recent Activity Feed -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-lg overflow-hidden h-100">
                <div class="card-header bg-white border-0 p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-black mb-0">Live Service Queue</h5>
                        <p class="text-muted small mb-0">Most recent orders across all stations</p>
                    </div>
                    <a href="{{ route('orders.index') }}" class="btn btn-sm btn-outline-primary fw-black text-uppercase rounded-pill px-3">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr class="bg-light">
                                <th class="ps-4 py-3 text-muted extra-small text-uppercase">Ticket</th>
                                <th class="py-3 text-muted extra-small text-uppercase text-center">Reference</th>
                                <th class="py-3 text-muted extra-small text-uppercase text-center">Status</th>
                                <th class="pe-4 py-3 text-muted extra-small text-uppercase text-end">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentOrders as $order)
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="order-icon-box bg-light text-primary">
                                            <i data-lucide="hash" style="width: 18px;"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark">{{ $order->order_no }}</div>
                                            <small class="text-muted">{{ $order->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @php
                                        $typeIcons = [
                                            'dine_in' => ['icon' => 'utensils', 'label' => 'Dine In'],
                                            'takeaway' => ['icon' => 'shopping-bag', 'label' => 'Takeaway'],
                                            'delivery' => ['icon' => 'truck', 'label' => 'Delivery'],
                                        ];
                                        $type = $typeIcons[$order->order_type] ?? ['icon' => 'package', 'label' => 'Order'];
                                    @endphp
                                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-light rounded-pill border">
                                        <i data-lucide="{{ $type['icon'] }}" class="text-muted" style="width: 14px;"></i>
                                        <span class="extra-small fw-black text-uppercase">{{ $order->diningTable->name ?? $type['label'] }}</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @php
                                        $statusConfig = [
                                            'pending' => ['class' => 'bg-secondary-subtle text-secondary', 'icon' => 'clock'],
                                            'preparing' => ['class' => 'bg-info-subtle text-info', 'icon' => 'flame'],
                                            'ready' => ['class' => 'bg-warning-subtle text-warning', 'icon' => 'bell'],
                                            'completed' => ['class' => 'bg-success-subtle text-success', 'icon' => 'check-circle'],
                                            'cancelled' => ['class' => 'bg-danger-subtle text-danger', 'icon' => 'x-circle'],
                                        ];
                                        $config = $statusConfig[$order->status] ?? $statusConfig['pending'];
                                    @endphp
                                    <span class="badge {{ $config['class'] }} px-3 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                                        <i data-lucide="{{ $config['icon'] }}" style="width: 14px;"></i>
                                        <span class="extra-small fw-black">{{ strtoupper($order->status) }}</span>
                                    </span>
                                </td>
                                <td class="pe-4 text-end">
                                    <div class="fw-black text-dark h6 mb-0">${{ number_format($order->total_amount, 2) }}</div>
                                    <small class="extra-small text-muted">{{ $order->items->count() }} items</small>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">No live orders found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-black { font-weight: 900 !important; }
    .extra-small { font-size: 0.65rem; }
    .rounded-lg { border-radius: 20px !important; }
    .tracking-wider { letter-spacing: 0.1em; }

    .order-icon-box {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(0,0,0,0.05);
    }
    /* Custom Status Tiles */
    .status-tile {
        background: white;
        padding: 24px 20px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.03);
    }
    .status-tile:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.08);
    }
    .status-tile .tile-icon {
        width: 48px;
        height: 48px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        color: #fff;
    }
    .status-tile .tile-value {
        font-size: 1.8rem;
        font-weight: 900;
        color: #0f172a;
        line-height: 1;
        margin-bottom: 5px;
    }
    .status-tile .tile-label {
        font-size: 0.7rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #64748b;
        letter-spacing: 0.5px;
    }

    /* Status Specific Colors */
    .status-tile.pending .tile-icon { background: linear-gradient(135deg, #f08913, #d97706); }
    .status-tile.preparing .tile-icon { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .status-tile.ready .tile-icon { background: linear-gradient(135deg, #10b981, #047857); }
    .status-tile.completed .tile-icon { background: linear-gradient(135deg, #6366f1, #4338ca); }

    .bg-premium-orange {
        background: linear-gradient(135deg, #f08913 0%, #d97706 100%) !important;
    }

    .btn-premium-action {
        background: #0f172a;
        color: white;
        padding: 12px 25px;
        border-radius: 12px;
        font-weight: 700;
        border: none;
        transition: 0.3s;
    }
    .btn-premium-action:hover {
        background: #1e293b;
        color: white;
        transform: translateY(-2px);
    }
    .btn-white { background: white; color: #1e293b; }
</style>
@endsection
