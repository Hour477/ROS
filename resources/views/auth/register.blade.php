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
                <h2>{{ __('Register') }}</h2>
                <p class="text-center mb-4 text-light opacity-75">Join the Restaurant Ordering System team</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label text-light">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your full name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-light">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label text-light">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-premium">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="mt-4 text-center">
                        <span class="text-light opacity-75">Already have an account?</span>
                        <a class="auth-link ms-1 fw-bold" href="{{ route('login') }}">
                            {{ __('Login here') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
