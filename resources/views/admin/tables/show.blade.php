@extends('layouts.app')

@section('content')
<div class="table-show-page p-1 p-md-3">
    <!-- Sophisticated Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">Table Details</h2>
            <p class="text-muted small mb-0">Complete profile and occupancy status for {{ $table->name }}</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('tables.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">Back to Tables</span>
                <span class="d-inline d-sm-none">Back</span>
            </a>
            <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-orange px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="edit-3" style="width: 16px;"></i>
                <span>Edit Configuration</span>
            </a>
        </div>
    </div>

    <!-- Details Card -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <div class="row g-4 g-lg-5">
                <!-- Visual Representative -->
                <div class="col-lg-5">
                    <div class="p-5 bg-light rounded-lg border border-dashed d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 400px;">
                        <div class="table-avatar bg-white shadow-sm rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 120px; height: 120px; border: 4px solid #fff;">
                            <i data-lucide="layout-dashboard" class="text-primary" style="width: 48px; height: 48px;"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-1">{{ $table->name }}</h3>
                        <p class="text-muted mb-4 small">Physical Seating Asset #{{ $table->id }}</p>
                        
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            @php
                                $statusConfig = [
                                    'available' => ['class' => 'bg-success-subtle text-success', 'icon' => 'check-circle'],
                                    'occupied' => ['class' => 'bg-danger-subtle text-danger', 'icon' => 'user-minus'],
                                    'reserved' => ['class' => 'bg-warning-subtle text-warning', 'icon' => 'clock'],
                                ];
                                $config = $statusConfig[$table->status] ?? $statusConfig['available'];
                            @endphp
                            <span class="badge {{ $config['class'] }} px-4 py-3 rounded-pill d-inline-flex align-items-center gap-2 fw-bold shadow-sm">
                                <i data-lucide="{{ $config['icon'] }}" style="width: 16px;"></i>
                                {{ strtoupper($table->status) }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Data Details -->
                <div class="col-lg-7">
                    <div class="item-info-header mb-4">
                        <span class="info-label text-uppercase mb-1 d-block">Core Information</span>
                        <h3 class="fw-bold" style="color: #1e293b;">Asset Specifications</h3>
                    </div>

                    <div class="specs-grid row g-3">
                        <div class="col-sm-6 text-start">
                            <div class="p-4 bg-light rounded-lg border">
                                <span class="info-label mb-1 d-block" style="font-size: 0.6rem;">Capacity</span>
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="users" class="text-primary" style="width: 20px;"></i>
                                    <span class="fw-bold h4 mb-0 text-dark">{{ $table->capacity }}</span>
                                    <span class="text-muted small">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="p-4 bg-light rounded-lg border">
                                <span class="info-label mb-1 d-block" style="font-size: 0.6rem;">Created At</span>
                                <div class="d-flex align-items-center gap-2">
                                    <i data-lucide="calendar" class="text-primary" style="width: 20px;"></i>
                                    <span class="fw-bold text-dark">{{ $table->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 p-4 rounded-lg bg-light border border-dashed">
                        <label class="info-label mb-3 d-block">Admin Notes</label>
                        <p class="mb-0 text-muted" style="line-height: 1.6;">
                            This table is currently tracked in the system. Any active orders linked to this table will prevent status changes until the bill is settled. Default seating behavior is optimized for {{ $table->capacity / 2 }} adults and minor furniture adjustments.
                        </p>
                    </div>

                    <div class="mt-5 border-top pt-4 text-center text-sm-start">
                        <button type="button" class="btn btn-action delete d-inline-flex align-items-center gap-2 border px-4 py-3 bg-white" 
                                onclick="confirmDelete('delete-form-{{ $table->id }}', '{{ $table->name }}')">
                            <i data-lucide="trash-2" style="width: 18px;"></i>
                            <span class="fw-bold text-danger">Decommission Table</span>
                        </button>
                        <form id="delete-form-{{ $table->id }}" action="{{ route('tables.destroy', $table->id) }}" method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body { background-color: #fdfaf5 !important; }
    .table-show-page { font-family: 'Kantumruy Pro', sans-serif; }
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    .responsive-h2 { font-size: calc(1.3rem + .5vw); }

    .btn-orange { background-color: #f08913; color: #fff; border: none; border-radius: 12px; transition: 0.3s; }
    .btn-orange:hover { background-color: #d87b11; transform: translateY(-2px); color: #fff; }
    
    .btn-white { background-color: #fff; color: #1e293b; border: 1px solid #e2e8f0; border-radius: 12px; transition: 0.3s; }
    .btn-white:hover { background-color: #f8fafc; transform: translateY(-2px); }
</style>
@endsection
