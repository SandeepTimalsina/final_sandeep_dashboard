@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Toasts --}}
    @include('components.toasts')

    <div class="row">
        <!-- Profile Card -->
        <div class="col-md-12">
            <div class="card mb-6">
                <h5 class="card-header">Profile Information</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Account -->
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <div class="alert alert-warning">
                            <h5 class="alert-heading">Are you sure you want to delete your account?</h5>
                            <p>Once deleted, your account cannot be recovered. Please be certain.</p>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="confirm_delete" id="confirm_delete" required>
                            <label class="form-check-label" for="confirm_delete">
                                I confirm my account deletion
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Enter Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-danger">Delete Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
