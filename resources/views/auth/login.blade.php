@extends('dashboard.layouts.app_login')
@section('bodyClass'){{ 'bg-login' }}@endsection
@section('content')
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/logo-icon.png') }}" width="80" alt="">
                                            <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                        </div>
                                        <div class="input-group shadow-sm rounded mt-5">
                                            <div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="{{ asset('assets/images') }}/icons/search.svg" alt="" width="16"></span>
                                            </div>
                                            <input type="button" class="form-control  border-0" value="Log in with google">
                                        </div>
                                        <div class="login-separater text-center"> <span>OR LOGIN WITH EMAIL</span>
                                            <hr/>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label>{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <div class="custom-control custom-switch">
                                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="form-group col text-right">
                                                    <a href="{{ route('password.request') }}"><i class='bx bxs-key mr-2'></i>{{ __('Forgot Your Password?') }}</a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
                                            <button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/images/login-images/login-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
@endsection
