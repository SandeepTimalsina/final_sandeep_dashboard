@extends('layouts.guest')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Forgot Password Card -->
            <div class="card px-sm-6 px-0">
                <div class="card-body">
                    <!-- Logo -->
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
                    <!-- /Logo -->

                    <h4 class="mb-1">Forgot Password? 🔒</h4>
                    <p class="mb-6">Enter your email and we'll send you instructions to reset your password</p>

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

                    <!-- Forgot Password Form -->
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="form-label">Email</label>
                            <input
                                id="email"
                                class="form-control"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                placeholder="Enter your email"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary d-grid w-100">
                            Email Password Reset Link
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
            <!-- /Forgot Password Card -->
        </div>
    </div>
</div>
@endsection
