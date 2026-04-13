@extends('layouts.app')

@section('title', 'System Settings')

@section('content')
<div class="settings-page p-3 p-md-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-black mb-0 text-dark">System Settings</h2>
            <p class="text-muted small fw-bold mb-0 text-uppercase tracking-wider">Configure your restaurant's global parameters</p>
        </div>
        <button type="submit" form="settingsForm" class="btn btn-premium-lg px-5">
            <i data-lucide="save" class="me-2" style="width: 18px;"></i> Save All Settings
        </button>
    </div>

    <form id="settingsForm" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-4">
            <!-- Business Information -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-header bg-white py-3 border-0">
                        <h6 class="fw-black text-dark text-uppercase mb-0"><i data-lucide="building" class="me-2"></i> Business Information</h6>
                    </div>
                    <div class="card-body p-4 pt-0">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="info-label mb-2">Restaurant Name</label>
                                <input type="text" name="business_name" class="form-control premium-field"
                                    placeholder="e.g. Gourmet Palace" value="{{ old('business_name', $settings['business_name'] ?? '') }}">
                            </div>
                            <div class="col-12">
                                <label class="info-label mb-2">Legal Address</label>
                                <textarea name="business_address" class="form-control premium-field" style="height: 100px; padding-top: 12px;">{{ old('business_address', $settings['business_address'] ?? '') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Primary Phone</label>
                                <input type="text" name="business_phone" class="form-control premium-field" value="{{ old('business_phone', $settings['business_phone'] ?? '') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Email for Invoices</label>
                                <input type="email" name="business_email" class="form-control premium-field" value="{{ old('business_email', $settings['business_email'] ?? '') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table & Service Settings -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-header bg-white py-3 border-0">
                        <h6 class="fw-black text-dark text-uppercase mb-0"><i data-lucide="settings-2" class="me-2"></i> Table & Service Settings</h6>
                    </div>
                    <div class="card-body p-4 pt-0">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="info-label mb-2">Primary Currency Symbol</label>
                                <select name="currency_symbol" class="form-select premium-field select2">
                                    <option value="" disabled>Select Symbol</option>
                                    @foreach($currencies as $currency)
                                    <option value="{{ $currency->symbol }}" {{ old('currency_symbol', $settings['currency_symbol'] ?? '$') == $currency->symbol ? 'selected' : '' }}>
                                        {{ $currency->name }} ({{ $currency->symbol }})
                                    </option>
                                    @endforeach
                                    {{-- Fallback if no currencies exist yet --}}
                                    @if($currencies->isEmpty())
                                    <option value="$" selected>$ (Default US Dollar)</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Tax Percentage (%)</label>
                                <input type="number" step="0.01" name="tax_percentage" class="form-control premium-field" placeholder="0.00" value="{{ old('tax_percentage', $settings['tax_percentage'] ?? '0') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="info-label mb-2">Exchange Rate (1$ = ? ៛)</label>
                                <input type="number" step="1" name="currency_exchange_rate" class="form-control premium-field" placeholder="4100" value="{{ old('currency_exchange_rate', $settings['currency_exchange_rate'] ?? '4100') }}">
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- Appearance Settings -->
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-header bg-white py-3 border-0">
                        <h6 class="fw-black text-dark text-uppercase mb-0"><i data-lucide="palette" class="me-2"></i> Branding & Aesthetics</h6>
                    </div>
                    <div class="card-body p-4 pt-0">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label class="info-label mb-2">System Logo</label>
                                <div class="p-3 border rounded-lg text-center bg-white shadow-sm mb-3" style="height: 140px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                    <img src="{{ $appSettings['logo'] }}" id="logoPreview" style="max-height: 100px; width: auto; transition: all 0.3s ease;">
                                </div>
                                <input type="file" name="business_logo" id="logoInput" class="d-none" onchange="previewImage(event, 'logoPreview')">
                                <button type="button" class="btn btn-sm btn-outline-primary w-100 rounded-pill fw-bold" onclick="document.getElementById('logoInput').click()">
                                    <i data-lucide="image" class="me-2" style="width: 14px;"></i> Change Logo
                                </button>
                                <small class="text-muted extra-small mt-2 d-block text-center">Used in invoices and main dashboard</small>
                            </div>

                            <div class="col-md-4">
                                <label class="info-label mb-2">Browser Favicon</label>
                                <div class="p-3 border rounded-lg text-center bg-white shadow-sm mb-3" style="height: 140px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                                    <img src="{{ $appSettings['favicon'] }}" id="faviconPreview" style="max-height: 64px; width: auto; transition: all 0.3s ease;">
                                </div>
                                <input type="file" name="business_favicon" id="faviconInput" class="d-none" onchange="previewImage(event, 'faviconPreview')">
                                <button type="button" class="btn btn-sm btn-outline-primary w-100 rounded-pill fw-bold" onclick="document.getElementById('faviconInput').click()">
                                    <i data-lucide="framer" class="me-2" style="width: 14px;"></i> Change Favicon
                                </button>
                                <small class="text-muted extra-small mt-2 d-block text-center">Displayed in browser tabs (PNG or ICO)</small>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 bg-light rounded-lg h-100 d-flex flex-column justify-content-center">
                                    <h6 class="fw-black text-dark d-flex align-items-center mb-3">
                                        <i data-lucide="sparkles" class="me-2 text-warning"></i>
                                        Visual Identity
                                    </h6>
                                    <p class="text-muted small mb-0">
                                        Your logo and favicon represent your brand's digital presence. High-resolution transparent PNGs are recommended for the best look across light and dark modes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('js')
<script>
    function previewImage(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById(previewId);
            output.src = reader.result;
            output.classList.add('animate__animated', 'animate__fadeIn');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
>

<style>
    .fw-black {
        font-weight: 900 !important;
    }

    .info-label {
        font-weight: 800;
        font-size: 0.70rem;
        color: #f08913;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .premium-field {
        border: 2px solid #f8fafc;
        border-radius: 12px;
        height: 50px;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .premium-field:focus {
        border-color: #f08913;
        box-shadow: 0 0 0 4px rgba(240, 137, 19, 0.1);
    }

    .bg-light-subtle {
        background-color: #f8fafc !important;
    }

    .rounded-lg {
        border-radius: 15px !important;
    }

    .extra-small {
        font-size: 0.7rem;
    }

    .tracking-wider {
        letter-spacing: 0.1em;
    }

    .form-check-input:checked {
        background-color: #f08913;
        border-color: #f08913;
    }
</style>
@endsection