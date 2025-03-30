@extends('layouts.guest')
@section('content')

<style>
    body {
        background: url("{{ asset('back1.jpg') }}");
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .login-container {
        background: rgba(255, 255, 255, 0.593); /* Increased transparency */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
        text-align: center;
        backdrop-filter: blur(5px); /* Adds blur effect */
    }
    .login-logo img {
        width: 80px;
        margin-bottom: 15px;
    }
    .form-control {
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.7); /* Transparent input fields */
        border: none;
    }
    .btn-primary {
        border-radius: 20px;
        background: #dc3545;
        border: none;
    }
    .btn-primary:hover {
        background: #bb2d3b;
    }
    .forgot-password {
        display: block;
        margin-top: 10px;
        font-size: 14px;
        color: #ffffff;
        text-decoration: none;
    }
    .forgot-password:hover {
        text-decoration: underline;
    }
</style>

<div class="login-container">
    <div class="login-logo">
        <a href="#"><img src="{{ asset('dist/img/logo.jpeg') }}" alt="Library Logo"></a>
    </div>
    <h3 class="mb-3">Admin Login</h3>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
   
    @error('username')
        <div class='alert alert-danger mt-2'>{{ $message }}</div>
    @enderror
</div>

@endsection
