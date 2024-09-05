@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="row d-flex align-items-center justify-content-center form-content-wrapper">
        <div class="col-lg-6">
            <img src="{{ asset('images/login.svg') }}" class="img-fluid" alt="Login">
        </div>
        <div class="col-lg-6">
            <div class="login-container">
                <h2 class="text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label font-weight-bold">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label font-weight-bold">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
                <div class="text-center mt-3">
                    Don't have an account? <a href="{{ route('register') }}">Register here</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .login-container {
        min-width: 500px;
        padding: 40px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
    }

    h2 {
        color: #212529;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
        height: 50px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #0069d9;
        border-color: #0069d9;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
    }

    .alert-danger {
        margin-top: 20px;
        font-size: 16px;
    }

    .mt-3 a {
        color: #0069d9;
        text-decoration: none;
        font-weight: bold;
    }

    .mt-3 a:hover {
        text-decoration: underline;
    }

    @media screen and (max-width: 576px) {
        .login-container {
            min-width: auto;
            padding: 20px;
        }

        .form-content-wrapper {
            padding: 20px;
        }

        .form-control {
            height: auto;
            font-size: 14px;
        }

        .btn-primary {
            padding: 10px;
            font-size: 14px;
        }
    }

    .form-content-wrapper {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .img-fluid {
        margin-bottom: 30px;
    }
</style>
@endpush
