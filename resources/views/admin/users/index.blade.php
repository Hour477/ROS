@extends('layouts.app')

@section('title', 'User Management')

@section('content')
<x-master-table 
    title="Personnel Management" 
    subtitle="Coordinate your workforce and system access levels" 
    :createRoute="route('users.create')" 
    createLabel="Add Staff Member" 
    searchPlaceholder="Search by name or email..." 
    :headers="['#', 'Profile', 'Contact', 'Role', 'Status', 'Actions']" 
    :items="$users"
>
    <x-slot name="filters">
        <form action="{{ url()->current() }}" method="GET" class="d-flex gap-2 m-0 align-items-center">
            <select name="role" class="select2" onchange="this.form.submit()" data-placeholder="All Roles">
                <option value=""></option>
                @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ request('role') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
            @if(request()->anyFilled(['search', 'role']))
                <a href="{{ route('users.index') }}" class="btn btn-action reset" title="Clear Filters" style="width: 48px; height: 48px;">
                    <i data-lucide="rotate-ccw" style="width: 20px;"></i>
                </a>
            @endif
        </form>
    </x-slot>

    @forelse($users as $user)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</span>
        </td>
        <td class="ps-4">
            <div class="d-flex align-items-center gap-3">
                <img src="{{ $user->display_image }}" 
                     class="rounded-circle shadow-sm border" style="width: 45px; height: 45px; object-fit: cover;">
                <div>
                    <div class="fw-bold text-dark">{{ $user->name }}</div>
                    <small class="text-muted">{{ $user->email }}</small>
                </div>
            </div>
        </td>
        <td class="text-start px-4 fw-medium text-dark">
            {{ $user->phone ?? '---' }}
        </td>
        <td class="text-center px-4">
            <span class="badge {{ $user->role && $user->role->slug == 'admin' ? 'bg-primary' : 'bg-light text-dark border' }} px-3 py-2 rounded-pill">
                {{ $user->role->name ?? 'None' }}
            </span>
        </td>
        <td class="text-center">
            @if($user->deleted_at)
            <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">Inactive</span>
            @else
            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Active</span>
            @endif
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-action edit" title="Edit Member">
                    <i data-lucide="edit-3"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Deactivate Member" 
                        onclick="confirmDelete('delete-form-{{ $user->id }}', '{{ $user->name }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center py-5">
            <i data-lucide="users" class="text-muted mb-3" style="width: 48px; height: 48px;"></i>
            <p class="text-muted">No staff members found.</p>
        </td>
    </tr>
    @endforelse
</x-master-table>
@endsection
