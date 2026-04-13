<?php

namespace App\Http\Controllers\admin;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function income(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', now()->format('Y-m-d'));

        $baseQuery = Payment::with(['order.customer'])
            ->whereBetween('paid_at', [
                Carbon::parse($startDate)->startOfDay(),
                Carbon::parse($endDate)->endOfDay()
            ]);

        if ($request->filled('method')) {
            $baseQuery->where('payment_method', $request->method);
        }

        // Clone query for stats to avoid pagination issues
        $statsQuery = clone $baseQuery;
        $allPaymentsForStats = $statsQuery->get();

        // Statistics for ALL filtered records
        $stats = [
            'total_income' => $allPaymentsForStats->sum('total_amount'),
            'total_transactions' => $allPaymentsForStats->count(),
            'avg_ticket' => $allPaymentsForStats->count() > 0 ? $allPaymentsForStats->sum('total_amount') / $allPaymentsForStats->count() : 0,
            'by_method' => $allPaymentsForStats->groupBy('payment_method')->map(fn($group) => $group->sum('total_amount')),
        ];

        // Paginate only for the table
        $payments = $baseQuery->latest()->paginate(10);

        // Daily Trend for Chart
        $trend = Payment::whereBetween('paid_at', [
                Carbon::parse($startDate)->startOfDay(),
                Carbon::parse($endDate)->endOfDay()
            ])
            ->select(DB::raw('DATE(paid_at) as date'), DB::raw('SUM(total_amount) as total'))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('admin.reports.income', compact('payments', 'stats', 'startDate', 'endDate', 'trend'));
    }

    public function exportExcel(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', now()->format('Y-m-d'));

        $payments = Payment::with(['order.customer'])
            ->whereBetween('paid_at', [
                Carbon::parse($startDate)->startOfDay(),
                Carbon::parse($endDate)->endOfDay()
            ])
            ->get();

        return Excel::download(new \App\Exports\IncomeExport($payments), "income_report_{$startDate}_to_{$endDate}.xlsx");
    }

    public function exportPdf(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', now()->format('Y-m-d'));

        $payments = Payment::with(['order.customer', 'order.user'])
            ->whereBetween('paid_at', [
                Carbon::parse($startDate)->startOfDay(),
                Carbon::parse($endDate)->endOfDay()
            ])
            ->get();

        $total = $payments->sum('total_amount');

        $pdf = Pdf::loadView('admin.reports.pdf.income', compact('payments', 'startDate', 'endDate', 'total'));
        return $pdf->download("income_report_{$startDate}_to_{$endDate}.pdf");
    }
}
