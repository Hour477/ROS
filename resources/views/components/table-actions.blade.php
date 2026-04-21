@props([
'editRoute' => null,
'deleteRoute' => null,
'viewRoute' => null,
'printRoute' => null,
'id' => null,
'name' => 'Item'
])

<div class="d-flex justify-content-end gap-2 table-actions-wrapper">
    @if($viewRoute)
    <a href="{{ $viewRoute }}" class="btn btn-action view" title="{{ __('View Details') }}">
        <i data-lucide="eye"></i>
    </a>
    @endif

    @if($printRoute)
    <a href="{{ $printRoute }}" class="btn btn-action edit" style="background-color: #f1f5f9; color: #64748b;" title="{{ __('Print Receipt') }}">
        <i data-lucide="printer"></i>
    </a>
    @endif

    @if($editRoute)
    <a href="{{ $editRoute }}" class="btn btn-action edit" title="{{ __('Edit') }}">
        <i data-lucide="pencil"></i>
    </a>
    @endif

    @if($deleteRoute)
    <button type="button" class="btn btn-action delete" title="{{ __('Delete') }}"
        onclick="confirmDelete('delete-form-{{ $id }}', '{{ addslashes($name) }}')">
        <i data-lucide="trash"></i>
    </button>
    <form id="delete-form-{{ $id }}" action="{{ $deleteRoute }}" method="POST" class="d-none">
        @csrf
        @method('DELETE')
    </form>
    @endif
</div>

<style>
    .table-actions-wrapper .btn-action {
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .table-actions-wrapper .btn-action:hover {
        transform: translateY(-2px) scale(1.08);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .table-actions-wrapper .btn-action i {
        stroke-width: 2px !important;
        /* Thinner for a more premium / simple feel */
    }
</style>