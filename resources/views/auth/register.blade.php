@extends('layouts.app')

@section('content')
<style>
    body {
        background: #1c1c1c;
        color: #fff;
    }

    .register-card {
        background-color: #2b2b2b;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0 8px 20px rgba(139, 0, 0, 0.5);
        border-top: 5px solid #8B0000;
    }

    .register-card h2 {
        color: #fff;
        font-weight: 600;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-control {
        background: #3a3a3a;
        border: 1px solid #8B0000;
        color: white;
    }

    .form-control::placeholder {
        color: #aaa;
    }

    .form-control:focus {
        border-color: #ff1a1a;
        box-shadow: 0 0 0 0.2rem rgba(255, 26, 26, 0.25);
    }

    label {
        font-weight: 500;
        color: #f5f5f5;
    }

    .btn-register {
        background-color: #8B0000;
        border: none;
        width: 100%;
        padding: 12px;
        font-weight: bold;
        color: white;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .btn-register:hover {
        background-color: #a50000;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="register-card">
                <h2>Register Akun Baru</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required placeholder="Alamat Email">
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password">Kata Sandi</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            placeholder="Password">
                        @error('password')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm">Konfirmasi Sandi</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required placeholder="Ulangi Password">
                    </div>

                    <button type="submit" class="btn-register">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection