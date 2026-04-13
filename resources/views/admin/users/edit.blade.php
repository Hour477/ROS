@extends('layouts.app')

@section('content')
<div class="user-form-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">{{ isset($user) ? 'Edit Staff Member' : 'New Staff Member' }}</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Define credentials and organizational role</p>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-white border shadow-sm px-4 rounded-lg fw-bold">
            <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Back to List
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-4 p-md-5">
            <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <div class="col-lg-4 text-center border-end">
                        <div class="p-4">
                            <label class="info-label mb-3 d-block">Profile Photo</label>
                            <div class="image-upload-wrapper mx-auto mb-3" style="width: 180px; height: 180px;">
                                <img src="{{ $user->display_image }}"
                                    id="preview" class="rounded-circle shadow-lg border-4 border-white" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <input type="file" name="image_file" id="imageInput" class="d-none" onchange="previewImage(event)">
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-4" onclick="document.getElementById('imageInput').click()">
                                <i data-lucide="camera" class="me-2" style="width: 14px;"></i> Change Photo
                            </button>
                            <p class="extra-small text-muted mt-3">Upload clear headshot (Max 2MB)</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="info-label mb-2">Display Name</label>
                                <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror"
                                    placeholder="Enter full name" value="{{ old('name', $user->name ?? '') }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Email Address</label>
                                <input type="email" name="email" class="form-control premium-field @error('email') is-invalid @enderror"
                                    placeholder="email@restaurant.com" value="{{ old('email', $user->email ?? '') }}" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Organizational Role</label>
                                <select name="role_id" class="form-select select2 @error('role_id') is-invalid @enderror" required>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ (isset($user) && $user->role_id == $role->id) || old('role_id') == $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('role_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Phone Number</label>
                                <input type="text" name="phone" class="form-control premium-field"
                                    placeholder="+000 000 000" value="{{ old('phone', $user->phone ?? '') }}">
                            </div>

                            <hr class="my-4">
                            <h6 class="fw-black text-dark text-uppercase mb-3"><i data-lucide="shield-check" class="me-2"></i> Security Credentials</h6>

                            <div class="col-md-6">
                                <label class="info-label mb-2">{{ isset($user) ? 'New Password (Optional)' : 'Security Password' }}</label>
                                <input type="password" name="password" class="form-control premium-field @error('password') is-invalid @enderror"
                                    placeholder="Minimum 8 characters">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control premium-field"
                                    placeholder="Repeat password">
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-top">
                            <button type="submit" class="btn btn-primary px-5 py-3 fw-black rounded-lg shadow-sm transform-active text-uppercase">
                                <i data-lucide="save" class="me-2"></i> {{ isset($user) ? 'Update Records' : 'Save New Member' }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .fw-black {
        font-weight: 900 !important;
    }

    .info-label {
        font-weight: 800;
        font-size: 0.7rem;
        color: #f08913;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .premium-field {
        border: 2px solid #f1f5f9;
        border-radius: 12px;
        height: 50px;
        font-weight: 600;
    }

    .premium-field:focus {
        border-color: #f08913;
        box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1);
    }

    .btn-primary {
        background: linear-gradient(135deg, #f08913 0%, #d97706 100%);
        border: none;
    }
</style>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection