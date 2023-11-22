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
                Password Confirmation
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
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                        @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">{{ __('Confirm') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
