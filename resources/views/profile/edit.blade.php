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
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ old('name', $user->name) }}" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ old('email', $user->email) }}" required>
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
                        <div class="alert alert-warning">
                            <h5 class="alert-heading">Are you sure you want to delete your account?</h5>
                            <p>Once deleted, your account cannot be recovered. Please be certain.</p>
                        </div>

                        <!-- Trigger Modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            Delete Account
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('profile.destroy') }}">
                                        @csrf
                                        @method('DELETE')

                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm Account Deletion</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Enter your password to confirm account deletion:</p>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Your password" required>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="confirm_delete"
                                                    id="confirm_delete_modal" required>
                                                <label class="form-check-label" for="confirm_delete_modal">
                                                    I confirm my account deletion
                                                </label>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection