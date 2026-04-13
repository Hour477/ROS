@props(['paginator'])

@if($paginator && $paginator instanceof \Illuminate\Pagination\LengthAwarePaginator)
<div {{ $attributes->merge(['class' => 'pagination-container py-4 d-flex justify-content-between align-items-center']) }}>
    <div class="pagination-info text-muted small fw-medium">
        Showing <span class="text-dark fw-bold">{{ $paginator->firstItem() ?? 0 }}</span> 
        to <span class="text-dark fw-bold">{{ $paginator->lastItem() ?? 0 }}</span> 
        of <span class="text-dark fw-bold">{{ $paginator->total() }}</span> results
    </div>
    
    
    <div class="pagination-links">
        {{ $paginator->appends(request()->query())->links() }}
    </div>
    
</div>

<style>
    .pagination-container .pagination {
        margin: 0 !important;
        gap: 6px;
        padding: 5px;
        background: #fff;
        border-radius: 12px;
        display: flex;
    }

    .pagination-container .page-item .page-link {
        border-radius: 10px !important;
        border: none;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #64748b;
        font-weight: 700;
        font-size: 0.85rem;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        background: transparent;
    }

    .pagination-container .page-item.active .page-link {
        background: linear-gradient(135deg, #ff8c00 0%, #ff5e00 100%) !important;
        color: #fff !important;
        box-shadow: 0 5px 15px rgba(255, 94, 0, 0.3);
        transform: scale(1.05);
    }

    .pagination-container .page-item .page-link:hover:not(.active) {
        background: #fff5eb;
        color: #ff8c00;
        transform: translateY(-2px);
    }

    /* Surgical Strike on redundant summary info */
    .pagination-links div[class*="flex-1"] > div:first-child {
        display: none !important;
    }
    
    .pagination-links div[class*="flex-1"] > div:last-child {
        display: block !important;
    }
    
    /* Fallback for different templates */
    .pagination-links .small.text-muted,
    .pagination-links nav > div:first-child {
        display: none !important;
    }
</style>
@endif
