@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="row d-flex align-items-center justify-content-center form-content-wrapper">
        <div class="col-lg-6">
            <img src="{{ asset('images/login.svg') }}" class="img-fluid" alt="Register">
        </div>
        <div class="col-lg-6">
            <div class="register-container">
                <h2 class="text-center">Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label font-weight-bold">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label font-weight-bold">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
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
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label font-weight-bold">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="text-center mt-3">
                        Already have an account? <a href="{{ route('login') }}">Login here</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .register-container {
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
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
    }

    @media screen and (max-width: 576px) {
        .register-container {
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
