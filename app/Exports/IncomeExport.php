<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class IncomeExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    protected $payments;

    public function __construct($payments)
    {
        $this->payments = $payments;
    }

    public function collection()
    {
        return $this->payments;
    }

    public function headings(): array
    {
        return [
            'Date',
            'Order No',
            'Customer',
            'Payment Method',
            'Subtotal',
            'Tax',
            'Total Amount'
        ];
    }

    public function map($payment): array
    {
        return [
            $payment->paid_at->format('Y-m-d H:i'),
            $payment->order->order_no,
            $payment->order->customer->name ?? 'Guest',
            strtoupper($payment->payment_method),
            $payment->order->subtotal,
            $payment->order->tax,
            $payment->total_amount,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
