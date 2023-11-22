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
                Password Reset Request
             </li>
          </ol>
       </nav>
    </div>
 </div>

 <div class="contact-section-layout-1 section-padding-2">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

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

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
