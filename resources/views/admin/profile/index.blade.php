@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
<div class="user-form-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">Profile</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Secure and manage your personal credentials</p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-white border shadow-sm px-4 rounded-lg fw-bold">
            <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Back to Dashboard
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-4 p-md-5">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <div class="col-lg-4 text-center border-end">
                        <div class="p-4">
                            <label class="info-label mb-3 d-block">System Identity</label>
                            <div class="image-upload-wrapper mx-auto mb-3" style="width: 180px; height: 180px;">
                                <img src="{{ $user->display_image }}"
                                    id="preview" class="rounded-circle shadow-lg border-4 border-white" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <input type="file" name="image" id="imageInput" class="d-none" onchange="previewImage(event)">
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-4" onclick="document.getElementById('imageInput').click()">
                                <i data-lucide="camera" class="me-2" style="width: 14px;"></i> Update Identity Image
                            </button>
                            <p class="extra-small text-muted mt-3">This image will appear across the administrative console.</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="info-label mb-2">Login Display Name</label>
                                <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror"
                                    placeholder="Enter your name" value="{{ old('name', $user->name) }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">System Primary Email</label>
                                <input type="email" name="email" class="form-control premium-field @error('email') is-invalid @enderror"
                                    placeholder="your@email.com" value="{{ old('email', $user->email) }}" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Emergency Contact Number</label>
                                <input type="text" name="phone" class="form-control premium-field @error('phone') is-invalid @enderror"
                                    placeholder="+000 000 000" value="{{ old('phone', $user->phone) }}">
                                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Administrative Role</label>
                                <input type="text" class="form-control premium-field bg-light" value="{{ $user->role->name ?? 'Administrator' }}" readonly disabled>
                                <small class="text-muted extra-small mt-1 d-block fw-bold">Roles are managed by system owners</small>
                            </div>

                            <hr class="my-4">
                            <h6 class="fw-black text-dark text-uppercase mb-3"><i data-lucide="lock" class="me-2"></i> Security & Authentication</h6>

                            <div class="col-md-6">
                                <label class="info-label mb-2">New Security Password</label>
                                <input type="password" name="password" class="form-control premium-field @error('password') is-invalid @enderror"
                                    placeholder="Leave blank to keep current">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control premium-field"
                                    placeholder="Repeat new password">
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-top">
                            <button type="submit" class="btn btn-primary px-5 py-3 fw-black rounded-lg shadow-sm transform-active text-uppercase">
                                <i data-lucide="shield-check" class="me-2"></i> Synchronize Profile Changes
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

    .extra-small {
        font-size: 0.75rem;
    }

    .tracking-wider {
        letter-spacing: 0.1em;
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