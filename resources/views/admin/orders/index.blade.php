@extends('layouts.app')

@section('title', 'Order History')

@section('content')
<x-master-table 
    title="Order Management" 
    subtitle="Track and manage live customer orders and sales" 
    :createRoute="route('orders.create')" 
    createLabel="New Order" 
    searchPlaceholder="Search by Order ID..." 
    :headers="['#', 'Order Details', 'Type', 'Amount', 'Status', 'Date', 'Actions']" 
    :items="$orders"
>
    <!-- Filter Slot -->
    <x-slot name="filters">
        <form action="{{ url()->current() }}" method="GET" class="d-flex gap-2 m-0 align-items-center">
            <select name="type" class="select2" onchange="this.form.submit()">
                <option value="">All types</option>
                <option value="dine_in" {{ request('type') == 'dine_in' ? 'selected' : '' }}>Dine In</option>
                <option value="takeaway" {{ request('type') == 'takeaway' ? 'selected' : '' }}>Takeaway</option>
                <option value="delivery" {{ request('type') == 'delivery' ? 'selected' : '' }}>Delivery</option>
            </select>
            <select name="status" class="select2" onchange="this.form.submit()">
                <option value="">All Statuses</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="preparing" {{ request('status') == 'preparing' ? 'selected' : '' }}>Preparing</option>
                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
            @if(request()->anyFilled(['search', 'type', 'status']))
                <a href="{{ route('orders.index') }}" class="btn btn-action reset" title="Clear Filters" style="width: 48px; height: 48px;">
                    <i data-lucide="rotate-ccw" style="width: 20px;"></i>
                </a>
            @endif
        </form>
    </x-slot>

    @forelse($orders as $order)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="ps-4">
            <div class="d-flex align-items-center gap-3">
                <div class="order-icon-box bg-light text-primary">
                    <i data-lucide="hash" style="width: 18px;"></i>
                </div>
                <div>
                    <div class="fw-bold text-dark">{{ $order->order_no }}</div>
                    <small class="text-muted">Customer: {{ $order->customer->name ?? 'Guest' }}</small>
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
                $type = $typeIcons[$order->order_type] ?? ['icon' => 'package', 'label' => 'Other'];
            @endphp
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-light rounded-pill border">
                <i data-lucide="{{ $type['icon'] }}" class="text-muted" style="width: 14px;"></i>
                <span class="extra-small fw-bold text-uppercase">{{ $type['label'] }}</span>
            </div>
        </td>
        <td class="text-center">
            <div class="fw-bold text-primary">${{ number_format($order->total_amount, 2) }}</div>
            <small class="extra-small text-muted">{{ $order->items->sum('quantity') }} items</small>
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
                {{ strtoupper($order->status) }}
            </span>
        </td>
        <td class="text-center">
            <div class="extra-small text-dark fw-bold">{{ $order->created_at->format('d M, Y') }}</div>
            <div class="extra-small text-muted">{{ $order->created_at->format('h:i A') }}</div>
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-action view" title="View Details">
                    <i data-lucide="eye"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Delete Order" onclick="confirmDelete('delete-form-{{ $order->id }}', '{{ $order->order_no }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $order->id }}" action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="7" class="text-center py-5">
            <i data-lucide="inbox" class="text-muted mb-3" style="width: 48px; height: 48px;"></i>
            <p class="text-muted">No orders found.</p>
        </td>
    </tr>
    @endforelse
</x-master-table>

<style>
    .order-icon-box {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
    }
    .extra-small {
        font-size: 0.65rem;
    }
</style>
@endsection
