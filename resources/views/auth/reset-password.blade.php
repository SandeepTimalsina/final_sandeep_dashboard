@extends('layouts.guest')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <div class="app-brand justify-content-center mb-6">
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span class="text-primary">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="50">
                                </span>
                            </span>
                            <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
                        </a>
                    </div>

                    <h4 class="mb-1">Reset Password 🔑</h4>
                    <p class="mb-6">Enter your new password below</p>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-danger list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-6">
                            <label for="email" class="form-label">Email</label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email', $request->email) }}"
                                required
                                autofocus
                                class="form-control"
                                placeholder="Enter your email"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="password" class="form-label">New Password</label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                class="form-control"
                                placeholder="Enter new password"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                class="form-control"
                                placeholder="Confirm new password"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary d-grid w-100">
                            Reset Password
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <a href="{{ route('login') }}" class="d-flex justify-content-center">
                            <i class="icon-base bx bx-chevron-left me-1"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
