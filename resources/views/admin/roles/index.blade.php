@extends('layouts.app')

@section('title', 'Roles & Permissions')

@section('content')
<x-master-table 
    title="Security Roles" 
    subtitle="Define access hierarchies and system permission profiles" 
    :createRoute="route('roles.create')" 
    createLabel="Create New Role" 
    :headers="['#', 'Role Identity', 'Permissions Info', 'Active Staff', 'Actions']" 
    :items="$roles"
>
    @foreach($roles as $role)
    <tr>
        <td class="text-center">
            <span class="text-muted fw-bold">{{ $loop->iteration }}</span>
        </td>
        <td class="ps-4">
            <div class="fw-black text-dark text-uppercase tracking-wider">{{ $role->name }}</div>
            <code class="extra-small text-muted">{{ $role->slug }}</code>
        </td>
        <td class="text-start pe-5" style="max-width: 300px;">
            <p class="mb-0 extra-small text-muted fw-medium">{{ $role->description ?? 'No specific description provided for this security level.' }}</p>
        </td>
        <td class="text-center">
            <div class="d-flex align-items-center justify-content-center gap-2">
                <i data-lucide="users" class="text-muted" style="width: 14px;"></i>
                <span class="fw-black h6 mb-0">{{ $role->users_count }}</span>
            </div>
        </td>
        <td class="text-end pe-4">
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-action edit" title="Modify Role">
                    <i data-lucide="edit-3"></i>
                </a>
                <button type="button" class="btn btn-action delete" title="Remove Role" 
                        onclick="confirmDelete('delete-form-{{ $role->id }}', '{{ $role->name }}')">
                    <i data-lucide="trash-2"></i>
                </button>
                <form id="delete-form-{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</x-master-table>
@endsection
