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
                <h2>{{ __('Reset Password') }}</h2>
                <p class="text-center mb-4 text-light opacity-75">
                    {{ __('Enter your email below to receive a password reset link.') }}
                </p>

                @if (session('status'))
                    <div class="alert alert-success border-0 shadow-sm rounded-pill px-4 mb-4" role="alert" style="background: #ecfdf5; color: #059669; font-weight: 600; font-size: 0.85rem;">
                        <i data-lucide="check-circle" class="me-2" style="width: 18px;"></i>
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                        <div class="position-relative">
                            <i data-lucide="mail" class="position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); width: 18px;"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your registered email" style="padding-left: 45px !important;">
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Send Reset Link') }}
                        </button>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="auth-link small fw-bold">
                            <i data-lucide="arrow-left" class="me-1" style="width: 14px;"></i> {{ __('Return to Login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
