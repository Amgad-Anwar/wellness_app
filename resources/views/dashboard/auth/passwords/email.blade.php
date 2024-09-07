@extends('dashboard.layouts.app_login')
@section('bodyClass'){{ 'bg-forgot' }}@endsection
@section('content')
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card shadow-lg forgot-box">
                <div class="card-body p-md-5">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('assets/images/icons/forgot-2.png') }}" width="140" alt="" />
                        </div>
                        <h4 class="mt-5 font-weight-bold">{{ __('Forgot Password?') }}</h4>
                        <p class="text-muted">{{ __('Enter your registered email ID to reset the password') }}</p>
                        <div class="form-group mt-5">
                            <label>{{ __('Email Address') }}</label>
                            <input type="text" class="form-control form-control-lg radius-30" placeholder="example@user.com" />
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block radius-30">{{ __('Send') }}</button>
                    </form>
                    <a href="{{ route('login') }}" class="btn btn-link btn-block"><i class='bx bx-arrow-back mr-1'></i>{{ __('Back to Login') }}</a>

                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
@endsection
