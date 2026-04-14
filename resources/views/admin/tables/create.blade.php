@extends('layouts.app')

@section('content')
<div class="table-create-page p-1 p-md-3">
    <!-- Sophisticated Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">{{ __('New Dining Table') }}</h2>
            <p class="text-muted small mb-0">{{ __('Registering a new seating area for your restaurant') }}</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('tables.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">{{ __('Back to Tables') }}</span>
                <span class="d-inline d-sm-none">{{ __('Back') }}</span>
            </a>
        </div>
    </div>

    <!-- Main White Card -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <form action="{{ route('tables.store') }}" method="POST">
                @csrf
                <div class="row g-4 g-lg-5">
                    <!-- Left Sidebar Column -->
                    <div class="col-lg-4 text-center">
                        <div class="item-info-header mb-3 text-start">
                            <span class="info-label text-uppercase mb-1 d-block">{{ __('Categorization') }}</span>
                        </div>
                        
                        <div class="p-5 bg-light rounded-lg border border-dashed mb-4 d-flex flex-column align-items-center justify-content-center" style="min-height: 250px;">
                            <i data-lucide="layout-dashboard" class="text-muted mb-3" style="width: 64px; height: 64px; opacity: 0.2;"></i>
                            <h5 class="fw-bold text-dark">{{ __('Table Layout') }}</h5>
                            <p class="small text-muted mb-0">{{ __('Define the physical space and capacity for this seating unit.') }}</p>
                        </div>

                        <!-- Status List -->
                        <div class="item-stats-list text-start">
                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <span style="width: 100px;" class="text-muted fw-bold extra-small text-uppercase">{{ __('Initial Status') }}</span>
                                <select name="status" class="form-select border-0 bg-transparent fw-bold p-1 text-primary select2" style="width: 140px; box-shadow: none; line-height: 1.5;">
                                    <option value="available" selected>{{ __('Available') }}</option>
                                    <option value="occupied">{{ __('Occupied') }}</option>
                                    <option value="reserved">{{ __('Reserved') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4 p-3 bg-light rounded-lg border border-dashed text-start">
                             <h6 class="fw-bold extra-small text-uppercase text-muted mb-2">{{ __('Notice') }}</h6>
                             <p class="extra-small text-muted mb-0">{{ __('Newly registered tables are set to \'Available\' by default for immediate guest seating.') }}</p>
                        </div>
                    </div>

                    <!-- Right Information Column -->
                    <div class="col-lg-8">
                        <div class="item-info-header mb-4">
                            <span class="info-label text-uppercase mb-1 d-block">{{ __('Table Specifications') }}</span>
                            <h3 class="fw-bold" style="color: #1e293b;">{{ __('Configuration') }}</h3>
                        </div>

                        <!-- Input: Name -->
                        <div class="mb-4">
                            <label class="info-label mb-2">{{ __('Table Number / Name :') }}</label>
                            <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('e.g. VIP-01 or Table 12') }}" required>
                            @error('name') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Row: Capacity -->
                        <div class="mb-4 mb-lg-5">
                            <label class="info-label mb-2">{{ __('Seating Capacity :') }}</label>
                            <div class="input-group premium-group shadow-sm">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i data-lucide="users" style="width: 16px; color: #f08913;"></i>
                                </span>
                                <input type="number" name="capacity" class="form-control premium-field border-start-0 @error('capacity') is-invalid @enderror" value="{{ old('capacity', 2) }}" min="1" required>
                                <span class="input-group-text bg-white text-muted border-start-0 px-3 fw-bold">{{ __('Guests') }}</span>
                            </div>
                            @error('capacity') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Action Controls -->
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top justify-content-end">
                            <button type="submit" class="btn btn-orange px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="plus-circle" style="width: 20px;"></i>
                                <span class="fw-bold">{{ __('Register Table') }}</span>
                            </button>
                            <a href="{{ route('tables.index') }}" class="btn btn-white border px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="x" style="width: 20px;"></i>
                                <span class="fw-bold">{{ __('Cancel') }}</span>
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
    .table-create-page { font-family: 'Kantumruy Pro', sans-serif; }

    /* Forms */
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    .premium-field { border: 1px solid #e2e8f0 !important; border-radius: 12px !important; padding: 12px 18px !important; font-weight: 500; transition: all 0.3s; }
    .premium-field:focus { border-color: #f08913 !important; box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1) !important; }

    /* Input Group */
    .premium-group { border-radius: 12px; overflow: hidden; }
    .premium-group .input-group-text { border: 1px solid #e2e8f0 !important; border-right: none !important; padding-left: 18px !important; transition: all 0.3s; }
    .premium-group .premium-field { border-top-left-radius: 0 !important; border-bottom-left-radius: 0 !important; border-left: none !important; }
    .premium-group:focus-within .input-group-text { border-color: #f08913 !important; }
    .premium-group:focus-within .premium-field { border-color: #f08913 !important; }

    /* Buttons */
    .btn-orange { background-color: #f08913; color: #fff; border: none; border-radius: 12px; transition: 0.3s; }
    .btn-orange:hover { background-color: #d87b11; transform: translateY(-2px); }
    .btn-white { background-color: #fff; color: #1e293b; border: 1px solid #e2e8f0; border-radius: 12px; transition: 0.3s; }
    .btn-white:hover { background-color: #f8fafc; transform: translateY(-2px); }

    .extra-small { font-size: 0.65rem; }
    .responsive-h2 { font-size: calc(1.3rem + .5vw); }
</style>
@endsection
