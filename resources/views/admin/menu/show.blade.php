@extends('layouts.app')

@section('content')
<div class="menu-item-details-page p-1 p-md-3">
    <!-- Top Header -->
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <div class="flex-grow-1">
            <h2 class="fw-bold mb-0 responsive-h2" style="color: #1e293b;">Menu Item Details</h2>
            <p class="text-muted small mb-0">Viewing information for "{{ $menuItem->name }}"</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <a href="{{ route('menu.edit', $menuItem->id) }}" class="btn btn-orange px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="edit-3" style="width: 16px;"></i>
                <span class="d-none d-sm-inline">Edit Item</span>
                <span class="d-inline d-sm-none">Edit</span>
            </a>
            <a href="{{ route('menu.index') }}" class="btn btn-white border px-3 px-sm-4 py-2 d-flex align-items-center gap-2">
                <i data-lucide="arrow-left" style="width: 16px;"></i>
                Back
            </a>
        </div>
    </div>

    <!-- Main White Card -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-3 p-md-5">
            <div class="row g-4 g-lg-5">
                <!-- Left Sidebar Column -->
                <div class="col-lg-4">
                    <div class="image-container mb-4">
                        <img src="{{ $menuItem->display_image }}" alt="{{ $menuItem->name }}" class="w-100 rounded-lg shadow-sm border responsive-image" style="object-fit: cover;">
                    </div>

                    <!-- Stats List -->
                    <div class="item-stats-list">
                        <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                            <span class="text-muted fw-bold extra-small text-uppercase">Status</span>
                            <span class="badge-status {{ $menuItem->status == 'available' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}">
                                <span class="dot"></span> {{ ucfirst($menuItem->status) }}
                            </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-3 py-md-4">
                            <span class="text-muted fw-bold extra-small text-uppercase">Price</span>
                            <span class="price-hero">${{ number_format($menuItem->price, 2) }}</span>
                        </div>
                    </div>
                </div>

                <!-- Right Information Column -->
                <div class="col-lg-8">
                    <div class="item-info-header mb-4">
                        <span class="info-label text-uppercase mb-1 d-block">Item Information</span>
                        <h1 class="fw-bold mb-2 mb-md-4 responsive-title" style="color: #1e293b;">{{ $menuItem->name }}</h1>
                    </div>

                    <!-- Row: Category and ID -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-7">
                            <label class="info-label mb-2">Category :</label>
                            <div class="card-info-block p-3">
                                <i data-lucide="tag" class="text-orange" style="width: 18px;"></i>
                                <span class="fw-bold ms-2">{{ $menuItem->category->name }}</span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="info-label mb-2">Item Reference</label>
                            <div class="card-info-block p-3">
                                <span class="fw-bold text-muted fs-4"># {{ $menuItem->id }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Description Block -->
                    <div class="mb-4 mb-md-5">
                        <label class="info-label mb-2">Description :</label>
                        <div class="desc-content-box p-3 p-md-4 border rounded-lg shadow-sm text-break" style="word-wrap: break-word; overflow-wrap: break-word;">
                            {{ $menuItem->description ?: 'No description available for this item.' }}
                        </div>
                    </div>

                    <!-- Bottom Metrics Row -->
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-4">
                            <div class="metric-block created">
                                <label>Created On</label>
                                <span>{{ $menuItem->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="metric-block update">
                                <label>Last Update</label>
                                <span>{{ $menuItem->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="metric-block cat-status">
                                <label>Cat. Status</label>
                                <span><i data-lucide="check" style="width: 16px;"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #fdfaf5 !important;
    }

    .menu-item-details-page {
        font-family: 'Kantumruy Pro', sans-serif;
    }

    /* Responsive Font Sizes */
    .responsive-h2 {
        font-size: calc(1.3rem + .6vw);
    }

    .responsive-title {
        font-size: calc(1.8rem + 1.2vw);
        line-height: 1.1;
    }

    .extra-small {
        font-size: 0.65rem;
    }

    /* Responsive Image */
    .responsive-image {
        height: 350px;
    }

    @media (max-width: 576px) {
        .responsive-image {
            height: 250px;
        }
    }

    /* Buttons */
    .btn-orange {
        background-color: #f08913;
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 10px;
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
        font-weight: 700;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        transition: 0.3s;
    }

    .btn-white:hover {
        background-color: #f8fafc;
        transform: translateY(-2px);
    }

    /* Icons and Labels */
    .text-orange {
        color: #f08913;
    }

    .info-label {
        font-weight: 800;
        font-size: 0.7rem;
        color: #f08913;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Left Side Stats */
    .badge-status {
        padding: 6px 14px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .badge-status .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: currentColor;
    }

    .price-hero {
        font-size: calc(1.8rem + 0.5vw);
        font-weight: 900;
        color: #10b981;
        letter-spacing: -1px;
    }

    /* Info Blocks */
    .card-info-block {
        background-color: #f8fbfd;
        border-radius: 12px;
        display: flex;
        align-items: center;
        border: 1px solid #e2e8f0;
        height: 100%;
        min-height: 55px;
    }

    .desc-content-box {
        background-color: #f8fbfd;
        color: #475569;
        font-weight: 500;
        font-size: 0.95rem;
        min-height: 80px;
    }

    /* Metric Blocks */
    .metric-block {
        padding: 15px 20px;
        border-radius: 12px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .metric-block label {
        font-weight: 800;
        font-size: 0.6rem;
        text-transform: uppercase;
        display: block;
        margin-bottom: 3px;
    }

    .metric-block span {
        font-weight: 900;
        font-size: 1rem;
        color: #1e293b;
    }

    .metric-block.created {
        background-color: #fff9ed;
    }

    .metric-block.created label {
        color: #f59e0b;
    }

    .metric-block.update {
        background-color: #f0fdf4;
    }

    .metric-block.update label {
        color: #22c55e;
    }

    .metric-block.cat-status {
        background-color: #f5f3ff;
    }

    .metric-block.cat-status label {
        color: #6366f1;
    }

    .metric-block.cat-status span {
        color: #10b981;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    @media (max-width: 991px) {
        .card-body {
            padding: 1.5rem !important;
        }
    }
</style>
@endsection