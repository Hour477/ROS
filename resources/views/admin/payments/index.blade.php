@extends('layouts.app')

@section('title', __('Payments History'))

@section('content')
<x-master-table 
    title="{{ __('Payment History') }}" 
    subtitle="{{ __('Track all financial transactions and payment receipts') }}" 
    createRoute="" 
    createLabel="" 
    searchPlaceholder="{{ __('Search order number...') }}" 
    :headers="['#', __('Transaction Details'), __('Order Ref'), __('Method'), __('Status'), __('Actions')]" 
    :items="$payments"
>
    @forelse($payments as $payment)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="ps-4">
            <div class="d-flex align-items-center gap-3">
                <div class="payment-icon bg-success-subtle text-success">
                    <i data-lucide="dollar-sign" style="width: 18px;"></i>
                </div>
                <div>
                    <div class="fw-black text-dark h5 mb-0">${{ number_format($payment->total_amount, 2) }}</div>
                    <small class="text-muted">{{ $payment->paid_at ? $payment->paid_at->format('M d, Y • h:i A') : 'N/A' }}</small>
                </div>
            </div>
        </td>
        <td class="text-center">
            <div class="badge bg-light text-primary border px-3 py-2 rounded-lg fw-bold">
                {{ $payment->order->order_no }}
            </div>
        </td>
        <td class="text-center">
            @php
                $methods = [
                    'cash' => ['icon' => 'banknote', 'class' => 'bg-info-subtle text-info'],
                    'card' => ['icon' => 'credit-card', 'class' => 'bg-primary-subtle text-primary'],
                    'qr' => ['icon' => 'qr-code', 'class' => 'bg-warning-subtle text-warning'],
                    'khqr' => ['icon' => 'qr-code', 'class' => 'bg-danger-subtle text-danger'],
                ];
                $method = $methods[$payment->payment_method] ?? ['icon' => 'help-circle', 'class' => 'bg-secondary-subtle text-secondary'];
            @endphp
            <span class="badge {{ $method['class'] }} px-3 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                <i data-lucide="{{ $method['icon'] }}" style="width: 14px;"></i>
                {{ __(strtoupper($payment->payment_method)) }}
            </span>
        </td>
        <td class="text-center">
            <span class="badge bg-success text-white px-3 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                <i data-lucide="check-circle" style="width: 14px;"></i>
                {{ __('PAID') }}
            </span>
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-action view" title="View Transaction / Receipt">
                    <i data-lucide="eye"></i>
                </a>
                <a href="{{ route('orders.receipt', $payment->order_id) }}" class="btn btn-action edit" style="background-color: #f1f5f9; color: #64748b;" title="Print Receipt">
                    <i data-lucide="printer"></i>
                </a>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center py-5 text-muted">{{ __('No transactions found.') }}</td>
    </tr>
    @endforelse
</x-master-table>

<style>
    .payment-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .fw-black { font-weight: 900; }
</style>
@endsection
