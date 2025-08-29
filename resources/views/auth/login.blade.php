@extends('layouts.guest') <!-- Breeze uses guest layout -->

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Login Card -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span class="text-primary">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="50">
                                </span>
                            </span>
                            <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Welcome to Sneat! 👋</h4>
                    <p class="mb-6">Please sign-in to your account and start the adventure</p>

                    <!-- Breeze Login Form -->
                    <form method="POST" action="{{ route('login') }}" class="mb-6">
                        @csrf

                        <!-- Email/Username -->
                        <div class="mb-6">
                            <label for="email" class="form-label">Email</label>
                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                placeholder="Enter your email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-6 form-password-toggle">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    placeholder="Enter your password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="mb-8 d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember"> Remember Me </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    <span>Forgot Password?</span>
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary d-grid w-100">Login</button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="{{ route('register') }}">
                            <span>Create an account</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login Card -->
        </div>
    </div>
</div>
@endsection
