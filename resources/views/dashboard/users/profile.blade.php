@extends('dashboard.layouts.app')
@push('headScripts')
@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">{{ __('User Profile') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i> {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-shape-polygon"></i> {{ __('User Profile') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('User Profile') }}</h4>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('users.profile_update') }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 text-center">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' class="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview" style="background-image: url('@if(isset($user)&&$user->image_dir){{ asset($user->image_dir.$user->image) }}@else{{ asset('images/110x110.png') }}@endif');">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>{{ __('Name') }}</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent"><i class="lni lni-users"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror border-left-0" name="name" id="name" value="{{ isset($user)?$user->name:old('name') }}" placeholder="{{ __('Enter :value',['value'=>__('User Name')]) }}">
                                @error('name')
                                <span class="invalid-feedback" user="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group col-lg-6">
                            <label>{{ __('Email Address') }}</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent"><i class="bx bx-envelope"></i>
                                </span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror border-left-0" name="email" id="email" value="{{ isset($user)?$user->email:old('email') }}" placeholder="{{ __('Enter :value',['value'=>__('Email Address')]) }}">
                                @error('email')
                                <span class="invalid-feedback" user="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>{{ __('Old Password') }}</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class='bx bx-barcode'></i>
                            </span>
                                </div>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror border-left-0" name="old_password" id="old_password" placeholder="{{ __('Enter :value',['value'=>__('Old Password')]) }}">
                                @error('old_password')
                                <span class="invalid-feedback" user="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>{{ __('New Password') }}</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class='bx bx-barcode'></i>
                            </span>
                                </div>
                                <input type="password" class="form-control @error('new_password') is-invalid @enderror border-left-0" name="new_password" id="new_password" placeholder="{{ __('Enter :value',['value'=>__('New Password')]) }}">
                                @error('new_password')
                                <span class="invalid-feedback" user="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>{{ __('Confirm Password') }}</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class='bx bx-barcode'></i>
                            </span>
                                </div>
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror border-left-0" name="confirm_password" id="confirm_password" placeholder="{{ __('Enter :value',['value'=>__('Confirm Password')]) }}">
                                @error('confirm_password')
                                <span class="invalid-feedback" user="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger px-5">{{ __('Save') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footerScripts')

@endpush
