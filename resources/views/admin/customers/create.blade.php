@extends('layouts.app')

@section('content')
<div class="user-form-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">New Customer</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Create a new client record</p>
        </div>
        <a href="{{ route('customers.index') }}" class="btn btn-white border shadow-sm px-4 rounded-lg fw-bold">
            <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Back to List
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <div class="card-body p-4 p-md-5">
            <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-4">
                    <div class="col-lg-4 text-center border-end">
                        <div class="p-4">
                            <label class="info-label mb-3 d-block">Client Photo</label>
                            <div class="image-upload-wrapper mx-auto mb-3" style="width: 180px; height: 180px;">
                                <img src="{{ asset('images/placeholder.jpg') }}" 
                                     id="preview" class="rounded-circle shadow-lg border-4 border-white" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <input type="file" name="image" id="imageInput" class="d-none" onchange="previewImage(event)">
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-4" onclick="document.getElementById('imageInput').click()">
                                <i data-lucide="camera" class="me-2" style="width: 14px;"></i> Upload Photo
                            </button>
                            <p class="extra-small text-muted mt-3">Upload profile image (Max 2MB)</p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="info-label mb-2">Full Name</label>
                                <input type="text" name="name" class="form-control premium-field @error('name') is-invalid @enderror" 
                                       placeholder="Enter customer name" value="{{ old('name') }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Email Address</label>
                                <input type="email" name="email" class="form-control premium-field @error('email') is-invalid @enderror" 
                                       placeholder="customer@email.com" value="{{ old('email') }}">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Phone Number</label>
                                <input type="text" name="phone" class="form-control premium-field @error('phone') is-invalid @enderror" 
                                       placeholder="+000 000 000" value="{{ old('phone') }}">
                                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">City</label>
                                <input type="text" name="city" class="form-control premium-field @error('city') is-invalid @enderror" 
                                       placeholder="Enter city" value="{{ old('city') }}">
                                @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-12">
                                <label class="info-label mb-2">Address</label>
                                <textarea name="address" class="form-control premium-field @error('address') is-invalid @enderror" 
                                          style="height: 100px; padding-top: 12px;" placeholder="Full residential address">{{ old('address') }}</textarea>
                                @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-top">
                            <button type="submit" class="btn btn-primary px-5 py-3 fw-black rounded-lg shadow-sm transform-active text-uppercase">
                                <i data-lucide="save" class="me-2"></i> Save Customer Record
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .fw-black { font-weight: 900 !important; }
    .info-label { font-weight: 800; font-size: 0.7rem; color: #f08913; text-transform: uppercase; letter-spacing: 1px; }
    .premium-field { border: 2px solid #f1f5f9; border-radius: 12px; height: 50px; font-weight: 600; }
    .premium-field:focus { border-color: #f08913; box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1); }
    .btn-primary { background: linear-gradient(135deg, #f08913 0%, #d97706 100%); border: none; }
    .extra-small { font-size: 0.75rem; }
</style>

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
