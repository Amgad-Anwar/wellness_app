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
                            <li class="breadcrumb-item"><a href="{{ route('meals.index') }}"><i
                                        class="bx bx-shape-polygon"></i> {{ __('Meals') }}</a>
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
                        action="{{ isset($medicine) ? route('meals.update',  $medicine->id) : route('meals.store') }}"
                        enctype="multipart/form-data">
                        @if (isset($medicine))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="row">



                            <div class="form-group col-lg-12">
                                <label>{{ __('Meal Category') }}</label>
                                <div class="input-group g-r-left">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button"><i
                                                class='bx bx-shape-polygon'></i>
                                        </button>
                                    </div>
                                    <select class="select2" required name="category">
                                        <option value="" disabled>
                                            {{ __('Select :type', ['type' => __('Meal Category')]) }}</option>

                                        <option @if (isset($medicine) && $medicine->category == 'breakfast') selected="selected" @endif
                                            value="breakfast">{{ __('breakfast') }}</option>
                                        <option @if (isset($medicine) && $medicine->category == 'main_course') selected="selected" @endif
                                            value="main_course">{{ __('main_course') }}</option>
                                        <option @if (isset($medicine) && $medicine->category == 'snack') selected="selected" @endif value="snack">
                                            {{ __('snack') }}</option>

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
                                    isset($medicine) && !empty($medicine->days)
                                        ? json_decode($medicine->days)
                                        : old('category', []); // Replace with your actual data if available
                            @endphp

                            <div class="form-group col-lg-12">
                                <label>{{ __('Meal Days') }}</label>
                                <div class="input-group g-r-left">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class='bx bx-shape-polygon'></i>
                                        </button>
                                    </div>
                                    <select class="select2" required name="days[]" multiple>
                                        <option value="" disabled>
                                            {{ __('Select :type', ['type' => __('Meal Days')]) }}
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
                            


                            {{-- <div class="form-group col-lg-12">
                                <label>{{ __('Images') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-States"></i>
                                        </span>
                                    </div>
                                    <input type="file" multiple
                                        class="form-control @error('images') is-invalid @enderror border-left-0"
                                        name="images[]" id="images"
                                        placeholder="{{ __('Enter :value', ['value' => __('Select Images')]) }}">
                                    @error('images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if (isset($medicine))
                                @foreach ($medicine->images as $img)
                                    <img style="width: 100px ; height:100px" src="{{ $img->file }}"
                                        alt="image not found">
                                @endforeach
                            @endif --}}

                            <div class="form-group col-lg-12 text-center">
                                <div class="avatar-upload">
                                    <div class="avatar-edit"> <input type="file" class="imageUpload" name="image"
                                            accept=".png, .jpg, .jpeg"> <label for="imageUpload"></label> </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            @if (isset($medicine) && !empty($medicine->image)) style="background-image: url('{{ asset("$medicine->image") }}');"

                                        @else

                                            style="background-image: url('https://admin.medlite.app/images/110x110.png ');" @endif>


                                        </div>
                                    </div>
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
