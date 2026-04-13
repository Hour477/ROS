@extends('layouts.app')

@section('title', 'Currencies')

@section('content')
<x-master-table 
    title="Currency Management" 
    subtitle="Configure the financial symbols and operational status for your platform"
    :createRoute="route('currencies.create')"
    createLabel="Add New Currency"
    searchPlaceholder="Search by name or symbol..."
    :headers="['#', 'Name', 'Symbol', 'Status', 'Actions']"
    :items="$currencies"
>
    @forelse($currencies as $currency)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ ($currencies->currentPage() - 1) * $currencies->perPage() + $loop->iteration }}</span>
        </td>
        <td class="text-start px-4">
            <div class="fw-bold text-dark">{{ $currency->name }}</div>
            <small class="text-muted extra-small text-uppercase tracking-wider">Financial Token</small>
        </td>
        <td class="text-center px-4">
            <span class="badge bg-light text-primary border px-3 py-2 rounded-lg fw-black" style="font-size: 1rem;">
                {{ $currency->symbol }}
            </span>
        </td>
        <td class="text-center px-4">
            @if($currency->is_active)
            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                <i data-lucide="check-circle" class="me-1" style="width: 14px;"></i> Active
            </span>
            @else
            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">
                <i data-lucide="x-circle" class="me-1" style="width: 14px;"></i> Inactive
            </span>
            @endif
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('currencies.edit', $currency->id) }}" class="btn btn-action edit" title="Edit Currency">
                    <i data-lucide="edit-3"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Delete Currency" 
                        onclick="confirmDelete('delete-form-{{ $currency->id }}', '{{ $currency->name }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $currency->id }}" action="{{ route('currencies.destroy', $currency->id) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="text-center py-5">
            <i data-lucide="search-x" class="text-muted mb-3" style="width: 48px; height: 48px;"></i>
            <p class="text-muted">No currencies match your criteria.</p>
        </td>
    </tr>
    @endforelse
</x-master-table>

<style>
    .fw-black { font-weight: 900 !important; }
    .extra-small { font-size: 0.65rem; }
    .tracking-wider { letter-spacing: 0.1em; }
    
    /* Action Buttons following Menu style */
    .btn-action {
        width: 38px;
        height: 38px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: all 0.3s;
    }
    .btn-action.edit { background-color: #f0f9ff; color: #0ea5e9; }
    .btn-action.edit:hover { background-color: #0ea5e9; color: white; transform: translateY(-2px); }
    .btn-action.delete { background-color: #fef2f2; color: #ef4444; }
    .btn-action.delete:hover { background-color: #ef4444; color: white; transform: translateY(-2px); }
</style>
@endsection
