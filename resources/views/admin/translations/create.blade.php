@extends('layouts.app')

@section('title', 'Add Translation')

@section('content')
<div class="user-form-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-black mb-1">Create New Translation</h4>
            <p class="text-muted small mb-0">Add a new key-value pair for localization</p>
        </div>
        <a href="{{ route('translations.index') }}" class="btn btn-white border px-4 rounded-pill fw-bold small">
            <i data-lucide="arrow-left" class="me-2" style="width: 18px;"></i> Back to List
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
        <form action="{{ route('translations.store') }}" method="POST">
            @csrf
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Group -->
                    <div class="col-md-6">
                        <label class="info-label mb-2">Group <span class="text-danger">*</span></label>
                        <select name="group" class="form-select premium-field @error('group') is-invalid @enderror">
                            <option value="general" selected>General</option>
                            <option value="pos">POS</option>
                            <option value="menu">Menu</option>
                            <option value="customer">Customer</option>
                        </select>
                        @error('group')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Key -->
                    <div class="col-md-6">
                        <label class="info-label mb-2">Translation Key <span class="text-danger">*</span></label>
                        <input type="text" name="key" class="form-control premium-field @error('key') is-invalid @enderror" 
                               placeholder="e.g. welcome_message" value="{{ old('key') }}" required>
                        <small class="text-muted">Must be unique and without spaces</small>
                        @error('key')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- English -->
                    <div class="col-12">
                        <label class="info-label mb-2">English Text</label>
                        <textarea name="en" class="form-control premium-field @error('en') is-invalid @enderror" rows="3" placeholder="Enter English translation...">{{ old('en') }}</textarea>
                        @error('en')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Khmer -->
                    <div class="col-12">
                        <label class="info-label mb-2">Khmer Text (ភាសាខ្មែរ)</label>
                        <textarea name="kh" class="form-control premium-field @error('kh') is-invalid @enderror" rows="3" placeholder="បញ្ចូលការបកប្រែជាភាសាខ្មែរ...">{{ old('kh') }}</textarea>
                        @error('kh')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="card-footer bg-light border-0 p-4 d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-white border px-4 rounded-pill fw-bold">Reset</button>
                <button type="submit" class="btn btn-premium-action px-5 rounded-pill shadow-sm">
                    <i data-lucide="save" class="me-2" style="width: 18px;"></i> Save Translation
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
