@extends('layouts.app')

@section('title', 'Menu Items')

@section('content')
<x-master-table
    title="Menu Management"
    subtitle="Coordinate your culinary collection and service availability"
    :createRoute="route('menu.create')"
    createLabel="Add New Item"
    searchPlaceholder="Search by name or description..."
    :headers="['#', 'Image', 'Name', 'Category', 'Price', 'Status', 'Actions']"
    :items="$menuItems">
    <x-slot name="filters">
        <form action="{{ url()->current() }}" method="GET" class="d-flex gap-2 m-0 align-items-center">
            <select name="category" class="select2" onchange="this.form.submit()">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            @if(request()->anyFilled(['search', 'category']))
            <a href="{{ route('menu.index') }}" class="btn btn-action reset" title="Clear Filters" style="width: 48px; height: 48px;">
                <i data-lucide="rotate-ccw" style="width: 20px;"></i>
            </a>
            @endif
        </form>
    </x-slot>

    @forelse($menuItems as $item)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="ps-4 text-start">
            <img src="{{ $item->display_image }}" alt="{{ $item->name }}" class="rounded-lg shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
        </td>
        <td class="text-start">
            <div class="fw-bold text-dark">{{ $item->name }}</div>
            <small class="text-muted text-truncate d-inline-block" style="max-width: 200px;">{{ $item->description }}</small>
        </td>
        <td class=" text-center">
            <span class="badge bg-light text-dark rounded-pill border">{{ $item->category->name }}</span>
        </td>
        <td class=" text-center">
            <span class="fw-bold text-primary">{{ $appSettings['currency'] }}{{ number_format($item->price, 2) }}</span>
        </td>
        <td class="text-center">
            @if($item->status == 'available')
            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Available</span>
            @else
            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">Unavailable</span>
            @endif
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('menu.show', $item->id) }}" class="btn btn-action view" title="View Details">
                    <i data-lucide="eye"></i>
                </a>
                <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-action edit" title="Edit Item">
                    <i data-lucide="edit-3"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Delete Item" onclick="confirmDelete('delete-form-{{ $item->id }}', '{{ $item->name }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $item->id }}" action="{{ route('menu.destroy', $item->id) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center py-5">
            <i data-lucide="search-x" class="text-muted mb-3" style="width: 48px; height: 48px;"></i>
            <p class="text-muted">No items match your criteria.</p>
        </td>
    </tr>
    @endforelse
</x-master-table>
@endsection