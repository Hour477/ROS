@extends('layouts.app')

@section('title', 'Income Report')

@section('content')
<div class="reports-page p-3 p-md-4">
    <!-- Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">Business Intelligence</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Financial Income & Analytics Report</p>
        </div>
        <div class="d-flex gap-2">
            <button onclick="window.location.href='{{ route('reports.income.pdf', request()->all()) }}'" class="btn btn-white border px-4 py-2 d-flex align-items-center gap-2 rounded-lg shadow-sm">
                <i data-lucide="file-text" class="text-danger" style="width: 18px;"></i>
                <span>Export PDF</span>
            </button>
            <button onclick="window.location.href='{{ route('reports.income.excel', request()->all()) }}'" class="btn btn-white border px-4 py-2 d-flex align-items-center gap-2 rounded-lg shadow-sm">
                <i data-lucide="file-spreadsheet" class="text-success" style="width: 18px;"></i>
                <span>Export Excel</span>
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="card border-0 filter-card rounded-lg mb-4">
        <div class="card-body p-4">
            <form action="{{ route('reports.income') }}" method="GET" class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="extra-small fw-black text-muted text-uppercase mb-2">Start Date</label>
                    <input type="date" name="start_date" class="form-control premium-field" value="{{ $startDate }}">
                </div>
                <div class="col-md-3">
                    <label class="extra-small fw-black text-muted text-uppercase mb-2">End Date</label>
                    <input type="date" name="end_date" class="form-control premium-field" value="{{ $endDate }}">
                </div>
                <div class="col-md-3">
                    <label class="extra-small fw-black text-muted text-uppercase mb-2">Payment Method</label>
                    <select name="method" class="form-select premium-field select2" data-placeholder="All Methods">
                        <option value=""></option>
                        <option value="cash" {{ request('method') == 'cash' ? 'selected' : '' }}>Cash</option>
                        <option value="card" {{ request('method') == 'card' ? 'selected' : '' }}>Card</option>
                        <option value="qr" {{ request('method') == 'qr' ? 'selected' : '' }}>QR/KHQR</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning bg-premium-orange flex-grow-1 py-2 fw-black rounded-lg shadow-sm text-uppercase text-white border-0">
                            <i data-lucide="filter" class="me-2" style="width: 18px;"></i> Update
                        </button>
                        <a href="{{ route('reports.income') }}" class="btn btn-light border py-2 px-3 rounded-lg" title="Reset Filters">
                            <i data-lucide="rotate-ccw" style="width: 18px;"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Key Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-lg bg-premium-orange stat-card text-white p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3 text-white text-opacity-75">
                    <span class="fw-bold extra-small text-uppercase">Total Gross Income</span>
                    <i data-lucide="dollar-sign" style="width: 24px;"></i>
                </div>
                <h2 class="fw-black mb-1">${{ number_format($stats['total_income'], 2) }}</h2>
                <p class="mb-0 small opacity-75">From {{ $stats['total_transactions'] }} transactions</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-lg bg-white stat-card p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                    <span class="fw-bold extra-small text-uppercase">Average Ticket</span>
                    <i data-lucide="trending-up" class="text-success" style="width: 24px;"></i>
                </div>
                <h2 class="fw-black mb-1 text-dark">${{ number_format($stats['avg_ticket'], 2) }}</h2>
                <p class="mb-0 small text-muted">Average spend per order</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-lg bg-white stat-card p-4 h-100">
                <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                    <span class="fw-bold extra-small text-uppercase">Cash Ratio</span>
                    <i data-lucide="banknote" class="text-warning" style="width: 24px;"></i>
                </div>
                @php
                    $cash = $stats['by_method']['cash'] ?? 0;
                    $ratio = $stats['total_income'] > 0 ? ($cash / $stats['total_income']) * 100 : 0;
                @endphp
                <h2 class="fw-black mb-1 text-dark">{{ number_format($ratio, 1) }}%</h2>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-warning" style="width: {{ $ratio }}%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visualization & Chart -->
    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-lg bg-white">
                <div class="card-header bg-white border-0 p-4 pb-0">
                    <h5 class="fw-black mb-0">Income Trend Analysis</h5>
                    <p class="text-muted small">Daily revenue fluctuations over selected period</p>
                </div>
                <div class="card-body p-4">
                    <canvas id="incomeChart" height="280"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-lg bg-white h-100">
                <div class="card-header bg-white border-0 p-4 pb-0">
                    <h5 class="fw-black mb-0">Payment Distribution</h5>
                    <p class="text-muted small">Market share by method</p>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        @foreach($stats['by_method'] as $method => $amount)
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 border-dashed py-3">
                            <div class="d-flex align-items-center gap-2 text-capitalize">
                                <div class="p-2 rounded bg-light">
                                    <i data-lucide="{{ $method == 'cash' ? 'banknote' : ($method == 'card' ? 'credit-card' : 'qr-code') }}" style="width: 16px;"></i>
                                </div>
                                <span class="fw-bold text-dark">{{ $method }}</span>
                            </div>
                            <span class="fw-black">${{ number_format($amount, 2) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-header bg-white border-0 p-4">
            <h5 class="fw-black mb-0">Transaction Ledger</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="px-4 py-3 text-muted extra-small text-uppercase">Date/Time</th>
                        <th class="py-3 text-muted extra-small text-uppercase">Order #</th>
                        <th class="py-3 text-muted extra-small text-uppercase">Customer</th>
                        <th class="py-3 text-muted extra-small text-uppercase">Method</th>
                        <th class="py-3 text-muted extra-small text-uppercase text-end px-4">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td class="px-4 py-3">
                            <div class="fw-bold text-dark">{{ $payment->paid_at->format('M d, Y') }}</div>
                            <small class="text-muted">{{ $payment->paid_at->format('h:i A') }}</small>
                        </td>
                        <td><span class="badge bg-light text-dark border fw-bold">{{ $payment->order->order_no }}</span></td>
                        <td class="fw-medium">{{ $payment->order->customer->name ?? 'Guest' }}</td>
                        <td>
                            <span class="badge {{ $payment->payment_method == 'cash' ? 'bg-success-subtle text-success' : 'bg-primary-subtle text-primary' }} badge-method text-uppercase extra-small">
                                <i data-lucide="{{ $payment->payment_method == 'cash' ? 'banknote' : ($payment->payment_method == 'card' ? 'credit-card' : 'qr-code') }}" class="me-1" style="width: 12px;"></i>
                                {{ $payment->payment_method }}
                            </span>
                        </td>
                        <td class="text-end px-4 fw-black text-dark">${{ number_format($payment->total_amount, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($payments->hasPages())
        <div class="px-5 border-top">
            <x-pagination :paginator="$payments" />
        </div>
        @endif
    </div>
</div>

<style>
    .reports-page { font-family: 'Kantumruy Pro', sans-serif; background: #f8fafc; min-height: 100vh; }
    .fw-black { font-weight: 900 !important; }
    .extra-small { font-size: 0.65rem; }
    .rounded-lg { border-radius: 16px !important; }
    
    /* Premium Filter Card */
    .filter-card {
        background: white;
        border: 1px solid rgba(226, 232, 240, 0.8);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
    }
    .premium-field { 
        border: 2px solid #f1f5f9; 
        border-radius: 12px; 
        font-weight: 600; 
        height: 48px;
        transition: 0.3s;
    }
    .premium-field:focus { 
        border-color: #f08913; 
        background: white;
        box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1); 
    }

    /* Elevated Stat Cards */
    .stat-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(0,0,0,0.03) !important;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
    }
    .bg-premium-orange {
        background: linear-gradient(135deg, #f08913 0%, #d97706 100%) !important;
    }

    /* Ledger Styling */
    .table thead th {
        background: #f8fafc;
        border-bottom: 2px solid #edf2f7;
        color: #64748b;
        font-weight: 800;
        letter-spacing: 0.05em;
    }
    .table tbody tr {
        transition: background 0.2s;
    }
    .table tbody tr:hover {
        background-color: #fdfaf7 !important;
    }
    
    .badge-method {
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: 800;
        letter-spacing: 0.5px;
    }

    .btn-white { background: white; color: #1e293b; font-weight: 700; transition: 0.3s; }
    .btn-white:hover { background: #f8fafc; transform: translateY(-1px); }
    
    .tracking-wider { letter-spacing: 0.1em; }
    .border-dashed { border-bottom-style: dashed !important; border-bottom-width: 2px !important; border-bottom-color: #e2e8f0 !important; }
</style>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('incomeChart').getContext('2d');
    const incomeData = {!! json_encode($trend->pluck('total')) !!};
    const labels = {!! json_encode($trend->pluck('date')) !!};

    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(240, 137, 19, 0.2)');
    gradient.addColorStop(1, 'rgba(240, 137, 19, 0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Gross Income',
                data: incomeData,
                borderColor: '#f08913',
                backgroundColor: gradient,
                fill: true,
                tension: 0.45,
                borderWidth: 4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#f08913',
                pointBorderWidth: 3,
                pointRadius: 5,
                pointHoverRadius: 8,
                pointHoverBackgroundColor: '#f08913',
                pointHoverBorderColor: '#fff',
                pointHoverBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: { intersect: false, mode: 'index' },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#1e293b',
                    padding: 12,
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return ' Sales: $' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { borderDash: [5, 5], color: '#e2e8f0' },
                    ticks: { 
                        font: { weight: 'bold' },
                        callback: value => '$' + value.toLocaleString() 
                    }
                },
                x: {
                    grid: { display: false },
                    ticks: { font: { weight: 'bold' } }
                }
            }
        }
    });
</script>
@endpush
@endsection
