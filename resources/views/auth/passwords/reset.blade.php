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
                    {{ __('Create a new secure password for your account.') }}
                </p>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" readonly>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-light">{{ __('New Password') }}</label>
                        <div class="position-relative">
                            <i data-lucide="lock" class="position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); width: 18px;"></i>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Min. 8 characters" style="padding-left: 45px !important;">
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label text-light">{{ __('Confirm New Password') }}</label>
                        <div class="position-relative">
                            <i data-lucide="shield-check" class="position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%); width: 18px;"></i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat new password" style="padding-left: 45px !important;">
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Update Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
