@extends('layouts.app')

@section('title', 'Translations')

@section('content')
<x-master-table 
    title="Translations" 
    subtitle="Configure database-driven translations for your application" 
    :createRoute="route('translations.create')" 
    createLabel="Add Translation" 
    searchPlaceholder="Search by key or text..." 
    :headers="['#', 'Group', 'Key', 'English', 'Khmer', 'Actions']" 
    :items="$translations"
>
    @forelse($translations as $item)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="text-center">
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill fw-bold text-uppercase" style="font-size: 0.65rem;">
                {{ $item->group }}
            </span>
        </td>
        <td class="ps-4">
            <code class="fw-bold text-primary">{{ $item->key }}</code>
        </td>
        <td class="ps-4">
            <div class="text-dark small fw-medium">{{ Str::limit($item->en, 50) }}</div>
        </td>
        <td class="ps-4">
            <div class="text-dark small fw-medium">{{ Str::limit($item->kh, 50) }}</div>
        </td>
        <td class="text-end pe-4">
            <x-table-actions 
                :editRoute="route('translations.edit', $item->id)" 
                :deleteRoute="route('translations.destroy', $item->id)" 
                :id="$item->id" 
                :name="$item->key" 
            />
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center py-5 text-muted">No translations found.</td>
    </tr>
    @endforelse
</x-master-table>
@endsection
