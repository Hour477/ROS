@extends('layouts.app')

@section('content')
<div class="menu-create-page p-1 p-md-3">
    <!-- Sophisticated Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">New Currency Symbol</h2>
            <p class="text-muted small mb-0">Defining a new financial token for your platform's transactions</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('currencies.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">Back to List</span>
                <span class="d-inline d-sm-none">Back</span>
            </a>
        </div>
    </div>

    <!-- Main White Card -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <form action="{{ route('currencies.store') }}" method="POST">
                @csrf
                <div class="row g-4 g-lg-5">
                    <!-- Left Sidebar Column -->
                    <div class="col-lg-4">
                        <div class="item-info-header mb-3">
                            <span class="info-label text-uppercase mb-1 d-block">Status & Visibility</span>
                        </div>

                        <!-- Status List -->
                        <div class="item-stats-list">
                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <span class="text-muted fw-bold extra-small text-uppercase">Financial Status</span>
                                <div class="form-check form-switch p-0 m-0">
                                    <input class="form-check-input premium-switch" type="checkbox" name="is_active" value="1" id="statusSwitch" checked>
                                </div>
                            </div>
                            <div class="py-2">
                                <span id="statusBadge" class="badge-status bg-success-subtle text-success justify-content-center w-100 mt-2">
                                    <span class="dot"></span> Active Symbol
                                </span>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-light rounded-lg border border-dashed text-center">
                            <i data-lucide="banknote" class="text-muted mb-2" style="width: 40px; height: 40px; opacity: 0.5;"></i>
                            <h6 class="fw-bold extra-small text-uppercase text-muted mb-2">Currency Configuration</h6>
                            <p class="extra-small text-muted mb-0">Ensure symbols are correctly formatted for display in invoices and receipts.</p>
                        </div>
                    </div>

                    <!-- Right Information Column -->
                    <div class="col-lg-8 border-start-lg">
                        <div class="item-info-header mb-4">
                            <span class="info-label text-uppercase mb-1 d-block">Financial Specifications</span>
                            <h3 class="fw-bold" style="color: #1e293b;">Currency Details</h3>
                        </div>

                        <!-- Input: Name -->
                        <div class="mb-4">
                            <label class="info-label mb-2">Currency Common Name :</label>
                            <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="e.g. US Dollar, Cambodian Riel" required>
                            @error('name') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Input: Symbol -->
                        <div class="mb-4">
                            <label class="info-label mb-2">Display Symbol :</label>
                            <div class="input-group premium-group shadow-sm" style="max-width: 250px;">
                                <span class="input-group-text bg-white border-end-0 text-muted">
                                    <i data-lucide="type" style="width: 16px; color: #f08913;"></i>
                                </span>
                                <input type="text" name="symbol" class="form-control premium-field border-start-0 @error('symbol') is-invalid @enderror" value="{{ old('symbol') }}" placeholder="e.g. $, ៛" required>
                            </div>
                            @error('symbol') <div class="invalid-feedback fw-bold d-block">{{ $message }}</div> @enderror
                        </div>

                        <!-- Action Controls -->
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top justify-content-end mt-5">
                            <button type="submit" class="btn btn-orange px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="plus-circle" style="width: 20px;"></i>
                                <span class="fw-bold uppercase-tracking">Register Currency</span>
                            </button>
                            <a href="{{ route('currencies.index') }}" class="btn btn-white border px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="x" style="width: 20px;"></i>
                                <span class="fw-bold uppercase-tracking">Discard</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body { background-color: #fdfaf5 !important; }
    .extra-small { font-size: 0.65rem; }
    .uppercase-tracking { text-transform: uppercase; letter-spacing: 1px; }
    .responsive-h2 { font-size: calc(1.3rem + .5vw); }
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    .premium-field { border: 1px solid #e2e8f0 !important; border-radius: 12px !important; padding: 12px 18px !important; background-color: #fff !important; font-weight: 500; transition: all 0.3s; }
    .premium-field:focus { border-color: #f08913 !important; box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1) !important; }
    .premium-group { border-radius: 12px; overflow: hidden; }
    .premium-group .input-group-text { border: 1px solid #e2e8f0 !important; border-right: none !important; padding-left: 18px !important; }
    .premium-group .premium-field { border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important; border-left: none !important; }
    .btn-orange { background-color: #f08913; color: #fff; border: none; border-radius: 12px; transition: 0.3s; }
    .btn-orange:hover { background-color: #d87b11; color: #fff; transform: translateY(-2px); }
    .btn-white { background-color: #fff; color: #1e293b; border: 1px solid #e2e8f0; border-radius: 12px; transition: 0.3s; }
    .btn-white:hover { background-color: #f8fafc; transform: translateY(-2px); }
    .premium-switch { width: 3rem !important; height: 1.5rem !important; cursor: pointer; border-color: #e2e8f0; background-color: #f1f5f9; }
    .premium-switch:checked { background-color: #10b981; border-color: #10b981; }
    .badge-status { padding: 8px 16px; border-radius: 50px; font-weight: 800; font-size: 0.75rem; display: flex; align-items: center; gap: 8px; }
    .badge-status .dot { width: 8px; height: 8px; border-radius: 50%; background: currentColor; }
    @media (min-width: 992px) { .border-start-lg { border-left: 1px solid #e2e8f0 !important; } }
</style>

<script>
    document.getElementById('statusSwitch').onchange = function() {
        const badge = document.getElementById('statusBadge');
        if (this.checked) {
            badge.className = 'badge-status bg-success-subtle text-success justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> Active Symbol';
        } else {
            badge.className = 'badge-status bg-danger-subtle text-danger justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> Inactive Symbol';
        }
    };
</script>
@endsection
