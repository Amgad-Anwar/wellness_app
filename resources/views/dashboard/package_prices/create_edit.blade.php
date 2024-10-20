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
                            <li class="breadcrumb-item"><a href="{{ route('package_prices.index') }}"><i
                                        class="bx bx-shape-polygon"></i> {{ __('Package Prices') }}</a>
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
                        action="{{ isset($medicine) ? route('package_prices.update',  $medicine->id) : route('package_prices.store') }}"
                        enctype="multipart/form-data">
                        @if (isset($medicine))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="row">



                            <div class="form-group col-lg-12">
                                <label>{{ __('Main Package') }}</label>
                                <div class="input-group g-r-left">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button"><i
                                                class='bx bx-shape-polygon'></i>
                                        </button>
                                    </div>
                                    <select class="select2" required name="package_id">
                                        <option value="" disabled >
                                            {{ __('Select :type', ['type' => __('Main Package')]) }}</option>

                                            @foreach( \App\Models\Package::all() as $key => $package)
                                            <option @if (isset($medicine) && $medicine->package_id == $package->id ) selected="selected" @endif
                                                value="{{$package->id}}">{{ $package->name_en }}</option>
                                            @endforeach

                                        
                                    </select>
                                </div>
                            </div>

                            @php
                                // Array of days
                                $days = [
                                    'saturday' => __('Saturday'),
                                    'sunday' => __('Sunday'),
                                    'monday' => __('Monday'),
                                    'tuesday' => __('Tuesday'),
                                    'wednesday' => __('Wednesday'),
                                    'thursday' => __('Thursday'),
                                    'friday' => __('Friday'),
                                ];
                                // Assuming $selectedDays holds the already selected days for this form
                                $selectedDays =
                                    isset($medicine) && !empty($medicine->off_days)
                                        ? json_decode($medicine->off_days)
                                        : old('off_days', []); // Replace with your actual data if available
                            @endphp

                            <div class="form-group col-lg-12">
                                <label>{{ __('Off Days') }}</label>
                                <div class="input-group g-r-left">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class='bx bx-shape-polygon'></i>
                                        </button>
                                    </div>
                                    <select class="select2" required name="off_days[]" multiple>
                                        <option value="" disabled>
                                            {{ __('Select :type', ['type' => __('Off Days')]) }}
                                        </option>

                                        @foreach ($days as $dayKey => $dayName)
                                            <option value="{{ $dayKey }}"
                                                @if (in_array($dayKey, $selectedDays)) selected="selected" @endif>
                                                {{ $dayName }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>





                            <div class="form-group col-lg-12">
                                <label>{{ __('days_number') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number"
                                        class="form-control @error('days_number') is-invalid @enderror border-left-0"
                                        name="days_number" id="name" required
                                        value="{{ isset($medicine) ? $medicine->days_number : old('days_number') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('days_number')]) }}">
                                    @error('days_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('price') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="number" step="any"
                                        class="form-control @error('price') is-invalid @enderror border-left-0"
                                        name="price" id="name" required
                                        value="{{ isset($medicine) ? $medicine->price : old('price') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('price')]) }}">
                                    @error('price')
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
