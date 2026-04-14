@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-5">
            <div class="text-center mb-5">
                <div class="brand-logo-wrapper mb-3 animate__animated animate__fadeInDown">
                    <img src="{{ $appSettings['logo'] }}" alt="{{ $appSettings['name'] }}">
                </div>
                
                <p class="brand-subtitle animate__animated animate__fadeInUp">{{ $appSettings['name'] }}</p>
            </div>

            <div class="auth-card animate__animated animate__fadeInUp">
                <h2>{{ __('Verify Email') }}</h2>
                <p class="text-center mb-4 text-light opacity-75">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                </p>

                @if (session('resent'))
                    <div class="alert alert-success border-0 shadow-sm rounded-pill px-4 mb-4 animate__animated animate__shakeX" role="alert" style="background: #ecfdf5; color: #059669; font-weight: 600; font-size: 0.85rem;">
                        <i data-lucide="check-circle" class="me-2" style="width: 18px;"></i>
                        {{ __('A fresh verification link has been sent to your email.') }}
                    </div>
                @endif

                <div class="text-center mb-4">
                    <div class="mx-auto mb-3 bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i data-lucide="mail-search" class="text-primary" style="width: 40px; height: 40px;"></i>
                    </div>
                    <p class="small text-muted mb-0">{{ __('Did not receive the email?') }}</p>
                </div>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <a href="{{ route('logout') }}" 
                       class="auth-link small fw-bold"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-lucide="log-out" class="me-1" style="width: 14px;"></i> {{ __('Sign Out') }}
                    </a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
