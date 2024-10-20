@extends('dashboard.layouts.app')
@push('headScripts')
@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">

                <div class="breadcrumb-title pr-3">
                    {{ isset($medicine) ? __('Edit :type', ['type' => $medicine->name]) : __('Create') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i>
                                    {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('packages.index') }}"><i
                                        class="bx bx-shape-polygon"></i> {{ __('Packages') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ isset($medicine) ? __('Edit :type', ['type' => $medicine->name]) : __('Create') }}</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="card radius-15 border-lg-top-primary">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">
                            {{ isset($medicine) ? __('Edit :type', ['type' => $medicine->name]) : __('Create') }}
                        </h4>
                    </div>
                    <hr>
                    <form method="POST"
                        action="{{ isset($medicine) ? route('packages.update',  $medicine->id) : route('packages.store') }}"
                        enctype="multipart/form-data">
                        @if (isset($medicine))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="row">



                           

                         




                            <div class="form-group col-lg-12">
                                <label>{{ __('Name en') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="text" 
                                        class="form-control @error('name_en') is-invalid @enderror border-left-0"
                                        name="name_en" id="name" required
                                        value="{{ isset($medicine) ? $medicine->name_en : old('name_en') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name en')]) }}">
                                    @error('name_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('Name ar') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="text"
                                        class="form-control @error('name_ar') is-invalid @enderror border-left-0"
                                        name="name_ar" id="name" required
                                        value="{{ isset($medicine) ? $medicine->name_ar : old('name_ar') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('name_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group col-lg-12"> 
                                <label>{{ __('Description en') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend"> 
                                        <span class="input-group-text bg-transparent">
                                            <i class="lni lni-States"></i>
                                        </span> 
                                    </div>
                                    <textarea class="form-control border-left-0" name="description_en" id="description_en" rows="5">
                                        {{ isset($medicine) ? $medicine->description_en : old('description_en') }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group col-lg-12"> 
                                <label>{{ __('Description ar') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend"> 
                                        <span class="input-group-text bg-transparent">
                                            <i class="lni lni-States"></i>
                                        </span> 
                                    </div>
                                    <textarea class="form-control border-left-0" name="description_ar" id="description_ar" rows="5">
                                        {{ isset($medicine) ? $medicine->description_ar : old('description_ar') }}
                                    </textarea>
                                </div>
                            </div>
                            

                            <div class="form-group col-lg-12">
                                <label>{{ __('carbs') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('carbs') is-invalid @enderror border-left-0"
                                        name="carbs" id="carbs" required
                                        value="{{ isset($medicine) ? $medicine->carbs : old('carbs') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('carbs')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('protein') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('protein') is-invalid @enderror border-left-0"
                                        name="protein" id="protein" required
                                        value="{{ isset($medicine) ? $medicine->protein : old('protein') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('protein')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('calories') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('calories') is-invalid @enderror border-left-0"
                                        name="calories" id="calories" required
                                        value="{{ isset($medicine) ? $medicine->calories : old('calories') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('calories')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('breakfast') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('breakfast') is-invalid @enderror border-left-0"
                                        name="breakfast" id="breakfast" required
                                        value="{{ isset($medicine) ? $medicine->breakfast : old('breakfast') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('breakfast')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('main_cource') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('main_cource') is-invalid @enderror border-left-0"
                                        name="main_cource" id="main_cource" required
                                        value="{{ isset($medicine) ? $medicine->main_cource : old('main_cource') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('main_cource')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('snack') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('snack') is-invalid @enderror border-left-0"
                                        name="snack" id="snack" required
                                        value="{{ isset($medicine) ? $medicine->snack : old('snack') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Name ar')]) }}">
                                    @error('snack')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                            

                            <div  class=" form-group col-lg-12 text-center">
                                <button type="submit" class="btn btn-danger px-5">{{ __('Save') }}</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footerScripts')
    <script src="{{ asset('js/permissions_table.js') }}"></script>
@endpush
