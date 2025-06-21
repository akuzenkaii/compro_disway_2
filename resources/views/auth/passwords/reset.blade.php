@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #3a0000, #5a0f0f, #750000);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .reset-card {
        background-color: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(15px);
        border-radius: 18px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
        padding: 40px;
        color: #fff;
        border-top: 4px solid #cc0000;
    }

    .form-control {
        background-color: #2a0000;
        border: 1px solid #800000;
        color: #fff;
        border-radius: 8px;
    }

    .form-control:focus {
        background-color: #3d0000;
        border-color: #ff1a1a;
        color: #fff;
        box-shadow: 0 0 0 0.25rem rgba(255, 26, 26, 0.25);
    }

    .form-label {
        color: #f8f8f8;
        font-weight: 500;
    }

    .btn-reset {
        background-color: #b30000;
        border: none;
        border-radius: 50px;
        padding: 10px 30px;
        color: white;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-reset:hover {
        background-color: #e60000;
    }

    .card-header {
        font-size: 1.6rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 25px;
        background: none;
        border: none;
        color: #fff;
    }
</style>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-md-6">
        <div class="reset-card">
            <div class="card-header">{{ __('Reset Password') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @error('email')
                            <span class="invalid-feedback d-block text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">{{ __('Password Baru') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password" required>

                        @error('password')
                            <span class="invalid-feedback d-block text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">{{ __('Konfirmasi Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-reset">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection