@extends('layouts.app')

@section('title', __('Table Management'))

@section('content')
<x-master-table 
    title="{{ __('Table Management') }}" 
    subtitle="{{ __('Organize your dining area and track occupancy') }}" 
    :createRoute="route('tables.create')" 
    createLabel="{{ __('Add New Table') }}" 
    searchPlaceholder="{{ __('Search by table name...') }}" 
    :headers="['#', __('Name'), __('Capacity'), __('Status'), __('Actions')]" 
    :items="$tables"
>
    <x-slot name="filters">
        <form action="{{ url()->current() }}" method="GET" class="d-flex gap-2 m-0 align-items-center">
            <select name="status" class="select2" onchange="this.form.submit()">
                <option value="">{{ __('All Statuses') }}</option>
                <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>{{ __('Available') }}</option>
                <option value="occupied" {{ request('status') == 'occupied' ? 'selected' : '' }}>{{ __('Occupied') }}</option>
                <option value="reserved" {{ request('status') == 'reserved' ? 'selected' : '' }}>{{ __('Reserved') }}</option>
            </select>
            @if(request()->anyFilled(['search', 'status']))
                <a href="{{ route('tables.index') }}" class="btn btn-action reset" title="Clear Filters" style="width: 48px; height: 48px;">
                    <i data-lucide="rotate-ccw" style="width: 20px;"></i>
                </a>
            @endif
        </form>
    </x-slot>

    @forelse($tables as $table)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="ps-4">
            <div class="d-flex align-items-center gap-3">
                <div class="icon-circle bg-light text-primary">
                    <i data-lucide="layout-dashboard" style="width: 20px;"></i>
                </div>
                <div>
                    <div class="fw-bold text-dark">{{ $table->name }}</div>
                    <small class="text-muted">Dining Table</small>
                </div>
            </div>
        </td>
        <td class="text-center">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-light rounded-pill border">
                <i data-lucide="users" class="text-muted" style="width: 14px;"></i>
                <span class="fw-bold text-dark">{{ $table->capacity }} {{ __('Persons') }}</span>
            </div>
        </td>
        <td class="text-center">
            @php
                $statusConfig = [
                    'available' => ['class' => 'bg-success-subtle text-success', 'icon' => 'check-circle'],
                    'occupied' => ['class' => 'bg-danger-subtle text-danger', 'icon' => 'user-minus'],
                    'reserved' => ['class' => 'bg-warning-subtle text-warning', 'icon' => 'clock'],
                ];
                $config = $statusConfig[$table->status] ?? $statusConfig['available'];
            @endphp
            <span class="badge {{ $config['class'] }} px-3 py-2 rounded-pill d-inline-flex align-items-center gap-2">
                <i data-lucide="{{ $config['icon'] }}" style="width: 14px;"></i>
                {{ __(ucfirst($table->status)) }}
            </span>
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('tables.show', $table->id) }}" class="btn btn-action view" title="View Table Info">
                    <i data-lucide="eye"></i>
                </a>
                <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-action edit" title="Edit Table">
                    <i data-lucide="edit-3"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Delete Table" onclick="confirmDelete('delete-form-{{ $table->id }}', '{{ $table->name }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $table->id }}" action="{{ route('tables.destroy', $table->id) }}" method="POST" class="d-none">
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
            <p class="text-muted">{{ __('No tables found matching your search.') }}</p>
        </td>
    </tr>
    @endforelse
</x-master-table>

<style>
    .icon-circle {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #e2e8f0;
    }
</style>
@endsection
