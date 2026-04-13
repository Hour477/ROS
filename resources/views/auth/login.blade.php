@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-5">
            <div class="text-center mb-5">
                <div class="brand-logo-wrapper mb-3">
                    <img src="{{ asset('images/logo.png') }}" alt="ROS Logo">
                </div>
                
                <p class="brand-subtitle">Restaurant Ordering System</p>
            </div>
            <div class="auth-card">
                <h2>{{ __('Login') }}</h2>
                <p class="text-center mb-4 text-light opacity-75">Welcome back to Restaurant Ordering System</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-light" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="auth-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Login') }}
                        </button>
                    </div>

                    <div class="mt-4 text-center">
                        <span class="text-light opacity-75">Don't have an account?</span>
                        <a class="auth-link ms-1 fw-bold" href="{{ route('register') }}">
                            {{ __('Register Now') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
