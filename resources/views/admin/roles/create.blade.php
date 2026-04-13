@extends('layouts.app')

@section('content')
<div class="role-form-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">{{ isset($role) ? 'Edit Security Role' : 'Define New Role' }}</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Configure access levels and permission groups</p>
        </div>
        <a href="{{ route('roles.index') }}" class="btn btn-white border shadow-sm px-4 rounded-lg fw-bold">
            <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Back to List
        </a>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <form action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}" method="POST">
                        @csrf
                        @if(isset($role)) @method('PUT') @endif

                        <div class="mb-4">
                            <label class="info-label mb-2">Role Title</label>
                            <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" 
                                   placeholder="e.g. Master Admin, Senior Chef" value="{{ old('name', $role->name ?? '') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            <small class="text-muted extra-small mt-1 d-block">System will automatically generate a unique slug for this role.</small>
                        </div>

                        <div class="mb-5">
                            <label class="info-label mb-2">Access Description</label>
                            <textarea name="description" class="form-control premium-field pt-3" rows="4" 
                                      placeholder="Describe the levels of access and duties assigned to this role...">{{ old('description', $role->description ?? '') }}</textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="pt-4 border-top">
                            <button type="submit" class="btn btn-primary w-100 py-3 fw-black rounded-lg shadow-sm transform-active text-uppercase">
                                <i data-lucide="shield-check" class="me-2"></i> {{ isset($role) ? 'Update Security Profile' : 'Activate New Role' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-black { font-weight: 900 !important; }
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    .premium-field { border: 2px solid #f1f5f9; border-radius: 12px; font-weight: 600; }
    .premium-field:focus { border-color: #f08913; box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1); }
    .btn-primary { background: linear-gradient(135deg, #f08913 0%, #d97706 100%); border: none; }
</style>
@endsection
