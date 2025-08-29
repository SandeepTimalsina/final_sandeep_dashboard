@extends('layouts.guest')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
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
                    <h4 class="mb-1">Adventure starts here 🚀</h4>
                    <p class="mb-6">Make your app management easy and fun!</p>

                    <!-- Breeze Registration Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name / Username -->
                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter your username" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="Enter your email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-6 form-password-toggle">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Enter your password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-6 form-password-toggle">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required placeholder="Confirm your password" />
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="my-7">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to <a href="javascript:void(0);">privacy policy & terms</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-6">
                            <button class="btn btn-primary d-grid w-100" type="submit">
                                {{ __('Sign up') }}
                            </button>
                        </div>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Register Card -->
        </div>
    </div>
</div>
@endsection
