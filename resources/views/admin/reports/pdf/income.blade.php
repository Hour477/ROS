<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Income Report</title>
    <style>
        body { font-family: sans-serif; color: #333; margin: 0; padding: 20px; }
        .header { text-align: center; margin-bottom: 40px; border-bottom: 3px solid #f08913; padding-bottom: 20px; }
        .header h1 { margin: 0; color: #f08913; text-transform: uppercase; letter-spacing: 2px; }
        .header p { margin: 5px 0; color: #666; font-size: 14px; }
        
        .stats-table { width: 100%; margin-bottom: 30px; border-collapse: collapse; }
        .stats-table td { padding: 15px; background: #fdf2e9; border: 1px solid #fadbd8; }
        .stats-label { display: block; font-size: 10px; font-weight: bold; text-transform: uppercase; color: #9B51E0; margin-bottom: 5px; }
        .stats-value { font-size: 20px; font-weight: bold; color: #222; }

        .ledger-table { width: 100%; border-collapse: collapse; font-size: 12px; }
        .ledger-table th { background: #f08913; color: white; padding: 10px; text-align: left; text-transform: uppercase; }
        .ledger-table td { padding: 10px; border-bottom: 1px solid #eee; }
        .ledger-table tr:nth-child(even) { background: #fafafa; }
        
        .footer { margin-top: 50px; text-align: right; font-size: 12px; color: #666; }
        .amount { font-weight: bold; text-align: right; }
        .total-row { background: #eee !important; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Financial Income Report</h1>
        <p>Period: {{ $startDate }} to {{ $endDate }}</p>
        <p>Generated on: {{ now()->format('M d, Y h:i A') }}</p>
    </div>

    <table class="stats-table">
        <tr>
            <td>
                <span class="stats-label">Total Gross Sales</span>
                <span class="stats-value">${{ number_format($total, 2) }}</span>
            </td>
            <td style="text-align: right;">
                <span class="stats-label">Volume</span>
                <span class="stats-value">{{ count($payments) }} TXNS</span>
            </td>
        </tr>
    </table>

    <table class="ledger-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Order #</th>
                <th>Customer</th>
                <th>Method</th>
                <th style="text-align: right;">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->paid_at->format('M d, Y') }}</td>
                <td>{{ $payment->order->order_no }}</td>
                <td>{{ $payment->order->customer->name ?? 'Guest' }}</td>
                <td style="text-transform: uppercase;">{{ $payment->payment_method }}</td>
                <td class="amount">${{ number_format($payment->total_amount, 2) }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="4" style="text-align: right;">GRAND TOTAL</td>
                <td class="amount">${{ number_format($total, 2) }}</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Report authorized by: {{ auth()->user()->name }}</p>
        <p>© {{ date('Y') }} Premium Restaurant OS</p>
    </div>
</body>
</html>
