@extends('dashboard.layouts.app')
@push('headScripts')
@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">

                <div class="breadcrumb-title pr-3">
                    {{ isset($user) ? __('Edit :type', ['type' => $user->name]) : __('Create') }}
                </div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i>
                                    {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}"><i
                                        class="bx bx-shape-polygon"></i> {{ __('Users') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ isset($user) ? __('Edit :type', ['type' => $user->name]) : __('Create') }}</li>
                        </ol>
                    </nav>
                </div>
                {{--                <div class="ml-auto"> --}}
                {{--                    <div class="btn-group"> --}}
                {{--                        <button type="button" class="btn btn-primary">Settings</button> --}}
                {{--                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span> --}}
                {{--                        </button> --}}
                {{--                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a> --}}
                {{--                            <a class="dropdown-item" href="javascript:;">Another action</a> --}}
                {{--                            <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
                {{--                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a> --}}
                {{--                        </div> --}}
                {{--                    </div> --}}
                {{--                </div> --}}
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15 border-lg-top-primary">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ isset($user) ? __('Edit :type', ['type' => $user->name]) : __('Create') }}
                        </h4>
                    </div>
                    <hr>
                    <form method="POST"
                        action="{{ isset($user) ? route('users.update', ['user' => $user]) : route('users.store') }}"
                        enctype="multipart/form-data">
                        @if (isset($user))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12 text-center">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' class="imageUpload" name="image"
                                            accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url('@if (isset($user) && $user->image_dir) {{ asset($user->image_dir . $user->image) }}@else{{ asset('images/110x110.png') }} @endif');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('Roles') }}</label>
                                <div class="input-group g-r-left">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button"><i
                                                class='bx bx-shape-polygon'></i>
                                        </button>
                                    </div>
                                    <select id="role_id" class="select2" multiple
                                        data-placeholder="{{ __('Select :type', ['type' => __('Role')]) }}"
                                        name="role_id[]">
                                        @foreach (\Spatie\Permission\Models\Role::where('guard_name' , 'web')->pluck('name', 'id')->toArray() as $id => $name)
                                            <option
                                                @if (isset($user) &&
                                                        in_array(
                                                            $id,
                                                            $user->roles()->pluck('id')->toArray())) selected="selected" @elseif(old('role_id') && in_array($id, old('role_id'))) selected="selected" @endif
                                                value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @include('dashboard.include.permissions_table')
                            <div class="form-group col-lg-6">
                                <label>{{ __('Name') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="lni lni-users"></i>
                                        </span>
                                    </div>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid @enderror border-left-0"
                                        name="name" id="name"
                                        value="{{ isset($user) ? $user->name : old('name') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('User Name')]) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
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
                                    <input type="email"
                                        class="form-control @error('email') is-invalid @enderror border-left-0"
                                        name="email" id="email"
                                        value="{{ isset($user) ? $user->email : old('email') }}"
                                        placeholder="{{ __('Enter :value', ['value' => __('Email Address')]) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>{{ __('Password') }}</label>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class='bx bx-barcode'></i>
                                        </span>
                                    </div>
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror border-left-0"
                                        name="password" id="password"
                                        placeholder="{{ __('Enter :value', ['value' => __('Password')]) }}">
                                    @error('password')
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


    <script>
        function roleData(role_id) {
            $.ajax({
                url: "{{ route('roles.rolesPermissions') }}",
                method: "POST",
                data: {
                    'array': JSON.stringify(role_id)
                },
                success: function(data) {
                    updateCheckboxes(data.data);
                },
                error: function() {
                    console.log('Error fetching data');
                }
            });
        }

        function updateCheckboxes(selectedPermissions) {
            $('input[name="permissions[]"]').prop('checked', false).prop('hidden', false);
            console.log("Number of permissions: " + selectedPermissions.length);
         
            var userPermissions = {!! !empty($user) ?  json_encode( $user->permissions  ) : "[]" !!};
           
            userPermissions.forEach(function(permission) {
                var trimmedValue = $.trim(permission.name);
                $('input[value="' + trimmedValue + '"]').prop('hidden', false).prop('checked', true);
            });
           
            
            selectedPermissions.forEach(function(permission) {
                var trimmedValue = $.trim(permission.name);
                $('input[value="' + trimmedValue + '"]').prop('hidden', true).prop('checked', true);
            });


        }

        $(document).ready(function() {
            $('#role_id').on('change', function() {
                var selectedRoles = $(this).val();
                roleData(selectedRoles);
            });

            roleData($('#role_id').val());
        });
    </script>
@endpush
