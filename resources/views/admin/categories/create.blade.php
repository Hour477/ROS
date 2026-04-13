@extends('layouts.app')

@section('content')
<div class="category-create-page p-1 p-md-3">
    <!-- Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">New Category</h2>
            <p class="text-muted small mb-0">Define a new structural group for your restaurant menu</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('categories.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">Back to List</span>
                <span class="d-inline d-sm-none">Back</span>
            </a>
        </div>
    </div>

    <!-- Main Card -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="row g-4 g-lg-5">
                    <!-- Right Information Column -->
                    <div class="col-lg-8">
                        <div class="item-info-header mb-4">
                            <span class="info-label text-uppercase mb-1 d-block">Essential Metadata</span>
                            <h3 class="fw-bold" style="color: #1e293b;">Category Details</h3>
                        </div>

                        <!-- Input: Name -->
                        <div class="mb-4">
                            <label class="info-label mb-2">Category Name :</label>
                            <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="e.g. Italian Specialties" required>
                            @error('name') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-4 mb-md-5">
                            <label class="info-label mb-2">Detailed Description :</label>
                            <textarea name="description" class="form-control premium-field @error('description') is-invalid @enderror" rows="5" placeholder="Briefly describe what items fall under this category...">{{ old('description') }}</textarea>
                            @error('description') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Action Controls -->
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top justify-content-end">
                            <button type="submit" class="btn btn-orange px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="plus-circle" style="width: 20px;"></i>
                                <span class="fw-bold">Create Category</span>
                            </button>
                            <a href="{{ route('categories.index') }}" class="btn btn-white border px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="x" style="width: 20px;"></i>
                                <span class="fw-bold">Cancel</span>
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar column for Status -->
                    <div class="col-lg-4">
                        <div class="item-info-header mb-3">
                            <span class="info-label text-uppercase mb-1 d-block">Management</span>
                        </div>
                        
                        <div class="p-4 bg-light rounded-lg border border-dashed mb-4">
                            <i data-lucide="info" class="text-primary mb-2" style="width: 20px;"></i>
                            <p class="extra-small text-muted mb-0">Items belonging to a disabled category will automatically be hidden from the menu grid.</p>
                        </div>

                        <div class="item-stats-list">
                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <span class="text-muted fw-bold extra-small text-uppercase">Initial Visibility</span>
                                <div class="form-check form-switch p-0 m-0">
                                    <input class="form-check-input premium-switch" type="checkbox" name="status" value="1" id="statusSwitch" checked>
                                    <input type="hidden" name="status" id="statusHidden" value="0" disabled>
                                </div>
                            </div>
                            <div class="py-2">
                                <span id="statusBadge" class="badge-status bg-success-subtle text-success justify-content-center w-100 mt-2">
                                    <span class="dot"></span> Active & Visible
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body { background-color: #fdfaf5 !important; }
    .category-create-page { font-family: 'Kantumruy Pro', sans-serif; }
    .responsive-h2 { font-size: calc(1.3rem + .5vw); }
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    
    .premium-field { border: 1px solid #e2e8f0 !important; border-radius: 12px !important; padding: 12px 18px !important; font-weight: 500; transition: all 0.3s; }
    .premium-field:focus { border-color: #f08913 !important; box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1) !important; }

    .btn-orange { background-color: #f08913; color: #fff; border: none; border-radius: 12px; transition: 0.3s; }
    .btn-orange:hover { background-color: #d87b11; transform: translateY(-2px); color: #fff; }
    .btn-white { background-color: #fff; color: #1e293b; border: 1px solid #e2e8f0; border-radius: 12px; }

    .premium-switch { width: 3rem !important; height: 1.5rem !important; cursor: pointer; }
    .premium-switch:checked { background-color: #10b981; border-color: #10b981; }

    .badge-status { padding: 8px 16px; border-radius: 50px; font-weight: 800; font-size: 0.75rem; display: flex; align-items: center; gap: 8px; }
    .badge-status .dot { width: 8px; height: 8px; border-radius: 50%; background: currentColor; }
    .extra-small { font-size: 0.65rem; }
</style>

<script>
    document.getElementById('statusSwitch').onchange = function() {
        const badge = document.getElementById('statusBadge');
        if (this.checked) {
            badge.className = 'badge-status bg-success-subtle text-success justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> Active & Visible';
        } else {
            badge.className = 'badge-status bg-secondary-subtle text-secondary justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> Hidden / Disabled';
        }
        document.getElementById('statusHidden').disabled = this.checked;
    };
</script>
@endsection
