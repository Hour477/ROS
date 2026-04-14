@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-5">
            <div class="text-center mb-5">
                <div class="brand-logo-wrapper mb-3">
                    <img src="{{ $appSettings['logo'] }}" alt="{{ $appSettings['name'] }}">
                </div>
                
                <p class="brand-subtitle">{{ $appSettings['name'] }}</p>
            </div>

            <div class="auth-card">
                <h2>{{ __('Confirm Identity') }}</h2>
                <p class="text-center mb-4 text-light opacity-75">
                    {{ __('Please confirm your password before continuing to this secure area.') }}
                </p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                        <div class="position-relative">
                            <i data-lucide="lock" class="position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); width: 18px;"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your current password" style="padding-left: 45px !important;">
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Confirm Password') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="auth-link small fw-bold" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
