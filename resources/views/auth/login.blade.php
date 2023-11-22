@extends('layouts.main')

@section('maincontent')

<div class="banner inner-banner">
    <div class="container">
       <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item">
                <a href="index.html">
                   <i class="fas fa-home"></i>
                   Home
                </a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                Contact Us
             </li>
          </ol>
       </nav>
    </div>
 </div>

 <div class="contact-section-layout-1 section-padding-2">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Session Status -->
                    <div class="mb-4">
                        <!-- Replace with your session status display logic -->
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                    </div>

                    <div class="d-flex justify-content-end">
                        <!-- Password Reset Link -->
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none me-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
