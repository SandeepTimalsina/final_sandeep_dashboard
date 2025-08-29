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

                    <h4 class="mb-1">Verify Your Email ✉️</h4>
                    <p class="mb-6">Thanks for signing up! Before getting started, please verify your email address by clicking the link we just emailed to you.</p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            A new verification link has been sent to your email address.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary d-grid w-100 mb-3">
                            Resend Verification Email
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-secondary d-grid w-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
