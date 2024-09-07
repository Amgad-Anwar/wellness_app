@extends('dashboard.layouts.app')
@push('headScripts')

@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">

                <div class="breadcrumb-title pr-3">{{ (isset($city))?__('Edit :type',['type'=>$city->name]):__('Create') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i> {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('cities.index') }}"><i class="bx bx-shape-polygon"></i> {{ __('Cities') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ (isset($city))?__('Edit :type',['type'=>$city->name]):__('Create') }}</li>
                        </ol>
                    </nav>
                </div>
                {{--                <div class="ml-auto">--}}
                {{--                    <div class="btn-group">--}}
                {{--                        <button type="button" class="btn btn-primary">Settings</button>--}}
                {{--                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>--}}
                {{--                        </button>--}}
                {{--                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>--}}
                {{--                            <a class="dropdown-item" href="javascript:;">Another action</a>--}}
                {{--                            <a class="dropdown-item" href="javascript:;">Something else here</a>--}}
                {{--                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15 border-lg-top-primary">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ (isset($city))?__('Edit :type',['type'=>$city->name]):__('Create') }}</h4>
                    </div>
                    <hr>
                    <form method="POST" action="{{ isset($city)?route('cities.update',['city'=>$city]):route('cities.store') }}" enctype="multipart/form-data">
                        @if(isset($city))
                            @method('PUT')
                        @endif
                        @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>{{ __('States') }}</label>
                                    <div class="input-group g-r-left">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button"><i class='bx bx-shape-polygon'></i>
                                            </button>
                                        </div>
                                        <select class="select2" data-placeholder="{{ __('Select :type',['type'=>__('State')]) }}" name="state_id">
                                            @foreach(\App\Models\State::pluck('name','id')->toArray() as $id=>$name)
                                                <option @if((isset($city)&&$city->state_id==$id)||old('city_id')==$id) selected="selected" @endif value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>{{ __('Name') }}</label>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent"><i class="lni lni-Cities"></i>
                                    </span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror border-left-0" name="name" id="name" value="{{ isset($city)?$city->name:old('name') }}" placeholder="{{ __('Enter :value',['value'=>__('Currencie Name')]) }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group col-lg-6">
                                    <label>{{ __('Arabic Name') }}</label>
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text bg-transparent"><i class="lni lni-Cities"></i>
                                    </span>
                                        </div>
                                        <input type="text" class="form-control @error('arab_name') is-invalid @enderror border-left-0" name="arab_name" id="arab_name" value="{{ isset($city)?$city->arab_name:old('arab_name') }}" placeholder="{{ __('Enter :value',['value'=>__('Arabic Name')]) }}">
                                        @error('arab_name')
                                        <span class="invalid-feedback" role="alert">
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
    <script src="{{ asset('js/permissions_table.js') }}"></script>
@endpush
