@extends('layouts.app')

@section('content')
<div class="menu-create-page p-1 p-md-3">
    <!-- Sophisticated Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">{{ __('New Menu Item') }}</h2>
            <p class="text-muted small mb-0">{{ __('Designing a new culinary masterpiece for your collection') }}</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('menu.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">{{ __('Back to Menu') }}</span>
                <span class="d-inline d-sm-none">{{ __('Back') }}</span>
            </a>
        </div>
    </div>

    <!-- Main White Card -->
    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4 g-lg-5">
                    <!-- Left Sidebar Column -->
                    <div class="col-lg-4">
                        <div class="item-info-header mb-3">
                            <span class="info-label text-uppercase mb-1 d-block">{{ __('Visual Presentation') }}</span>
                        </div>

                        <div class="image-container mb-4">
                            <div id="imagePreviewContainer" class="w-100 bg-light rounded-lg shadow-sm border d-flex align-items-center justify-content-center cursor-pointer position-relative responsive-image" style="overflow: hidden; cursor: pointer;" onclick="document.getElementById('imageInput').click()">
                                <div id="placeholderOverlay" class="text-center p-4">
                                    <i data-lucide="image-plus" class="text-muted mb-2" style="width: 48px; height: 48px; opacity: 0.5;"></i>
                                    <p class="small text-muted fw-bold mb-0">{{ __('Tap to upload portrait') }}</p>
                                    <p class="extra-small text-muted opacity-75">{{ __('Recommend 800x800px') }}</p>
                                </div>
                                <img src="" id="imagePreview" alt="Preview" class="d-none w-100 h-100 object-fit-cover">
                            </div>
                            <input type="file" name="image" id="imageInput" class="d-none" accept="image/*">
                            @error('image') <div class="text-danger small mt-2 fw-bold"><i data-lucide="alert-circle" style="width: 14px;"></i> {{ $message }}</div> @enderror
                        </div>

                        <!-- Status List -->
                        <div class="item-stats-list">
                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <span class="text-muted fw-bold extra-small text-uppercase">{{ __('Initial Status') }}</span>
                                <div class="form-check form-switch p-0 m-0">
                                    <input class="form-check-input premium-switch" type="checkbox" name="status" value="available" id="statusSwitch" checked>
                                </div>
                                <input type="hidden" name="status" id="statusHidden" value="unavailable">
                            </div>
                            <div class="py-2">
                                <span id="statusBadge" class="badge-status bg-success-subtle text-success justify-content-center w-100 mt-2">
                                    <span class="dot"></span> {{ __('Available for Ordering') }}
                                </span>
                            </div>
                        </div>

                        <div class="mt-4 p-3 bg-light rounded-lg border border-dashed">
                            <h6 class="fw-bold extra-small text-uppercase text-muted mb-2">{{ __('Pro Tip') }}</h6>
                            <p class="extra-small text-muted mb-0">{{ __('High-quality images with neutral backgrounds perform 40% better in digital menus.') }}</p>
                        </div>
                    </div>

                    <!-- Right Information Column -->
                    <div class="col-lg-8">
                        <div class="item-info-header mb-4">
                            <span class="info-label text-uppercase mb-1 d-block">{{ __('Essential Specifications') }}</span>
                            <h3 class="fw-bold" style="color: #1e293b;">{{ __('Item Details') }}</h3>
                        </div>

                        <!-- Input: Name -->
                        <div class="mb-4">
                            <label class="info-label mb-2">{{ __('Item Name') }} :</label>
                            <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('e.g. Signature Truffle Pasta') }}" required>
                            @error('name') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Row: Category and Price -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-7">
                                <label class="info-label mb-2">{{ __('Category Assignment') }} :</label>
                                <select name="category_id" class="form-select premium-field select2 @error('category_id') is-invalid @enderror" required>
                                    <option value="" disabled selected class="pe-4">{{ __('Select a Category') }}</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-5">
                                <label class="info-label mb-2">{{ __('Price') }} ({{ $appSettings['currency'] }}) :</label>
                                <div class="input-group premium-group shadow-sm">
                                    <span class="input-group-text bg-white border-end-0 text-muted px-3 fw-bold" style="color: #f08913;">
                                        {{ $appSettings['currency'] }}
                                    </span>
                                    <input type="number" step="0.01" name="price" class="form-control premium-field border-start-0 @error('price') is-invalid @enderror" value="{{ old('price') }}" placeholder="0.00" required>
                                </div>
                                @error('price') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- Description Block -->
                        <div class="mb-4 mb-md-5">
                            <label class="info-label mb-2">{{ __('Culinary Description') }} :</label>
                            <textarea name="description" class="form-control premium-field @error('description') is-invalid @enderror" rows="6" placeholder="{{ __('Describe the flavors, core ingredients, and artistic presentation...') }}">{{ old('description') }}</textarea>
                            @error('description') <div class="invalid-feedback fw-bold">{{ $message }}</div> @enderror
                        </div>

                        <!-- Action Controls -->
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top justify-content-end">
                            <button type="submit" class="btn btn-orange px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="plus-circle" style="width: 20px;"></i>
                                <span class="fw-bold">{{ __('Register Menu Item') }}</span>
                            </button>
                            <a href="{{ route('menu.index') }}" class="btn btn-white border px-4 py-3 d-flex align-items-center gap-2 shadow-sm">
                                <i data-lucide="x" style="width: 20px;"></i>
                                <span class="fw-bold">{{ __('Discard Changes') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #fdfaf5 !important;
    }

    .menu-create-page {
        font-family: 'Kantumruy Pro', sans-serif;
    }

    /* Layout & Spacing */
    .responsive-h2 {
        font-size: calc(1.3rem + .5vw);
    }

    .extra-small {
        font-size: 0.65rem;
    }

    .responsive-image {
        height: 350px;
    }

    @media (max-width: 576px) {
        .responsive-image {
            height: 260px;
        }
    }

    /* Labels & Typography */
    .info-label {
        font-weight: 800;
        font-size: 0.7rem;
        color: #f08913;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Form Fields */
    .premium-field {
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 12px 18px !important;
        background-color: #fff !important;
        font-weight: 500;
        transition: all 0.3s;
    }

    .premium-field:focus {
        border-color: #f08913 !important;
        box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1) !important;
    }

    /* Input Group Premium Fix */
    .premium-group {
        border-radius: 12px;
        overflow: hidden;
    }

    .premium-group .input-group-text {
        border: 1px solid #e2e8f0 !important;
        border-right: none !important;
        padding-left: 18px !important;
        transition: all 0.3s;
    }

    .premium-group .premium-field {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-left: none !important;
    }

    .premium-group:focus-within .input-group-text {
        border-color: #f08913 !important;
    }

    .premium-group:focus-within .premium-field {
        border-color: #f08913 !important;
    }



    /* Buttons */
    .btn-orange {
        background-color: #f08913;
        color: #fff;
        border: none;
        border-radius: 12px;
        transition: 0.3s;
    }

    .btn-orange:hover {
        background-color: #d87b11;
        color: #fff;
        transform: translateY(-2px);
    }

    .btn-white {
        background-color: #fff;
        color: #1e293b;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        transition: 0.3s;
    }

    .btn-white:hover {
        background-color: #f8fafc;
        transform: translateY(-2px);
    }

    /* Switch Customization */
    .premium-switch {
        width: 3rem !important;
        height: 1.5rem !important;
        cursor: pointer;
        border-color: #e2e8f0;
        background-color: #f1f5f9;
    }

    .premium-switch:checked {
        background-color: #10b981;
        border-color: #10b981;
    }

    /* Status Badge */
    .badge-status {
        padding: 8px 16px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .badge-status .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: currentColor;
    }
</style>

<script>
    document.getElementById('imageInput').onchange = function(evt) {
        const [file] = this.files;
        if (file) {
            const preview = document.getElementById('imagePreview');
            const overlay = document.getElementById('placeholderOverlay');
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('d-none');
            overlay.classList.add('d-none');
        }
    };

    document.getElementById('statusSwitch').onchange = function() {
        const badge = document.getElementById('statusBadge');
        if (this.checked) {
            badge.className = 'badge-status bg-success-subtle text-success justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> {{ __('
            Available
            for Ordering ') }}';
        } else {
            badge.className = 'badge-status bg-danger-subtle text-danger justify-content-center w-100 mt-2';
            badge.innerHTML = '<span class="dot"></span> {{ __('
            Hidden from Menu ') }}';
        }
        document.getElementById('statusHidden').disabled = this.checked;
    };
</script>
@endsection