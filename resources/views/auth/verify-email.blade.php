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
                Email Verification
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
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="mt-4 d-flex justify-content-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <button type="submit" class="btn btn-primary">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-secondary">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
