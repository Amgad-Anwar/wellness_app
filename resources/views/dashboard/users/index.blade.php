@extends('dashboard.layouts.app')
@push('headScripts')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">{{ __('Users') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i> {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-shape-polygon"></i> {{ __('Users') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="ml-auto">
                    @if(PerUser('users.export'))
                        <div class="btn-group mt-1 mb-1">
                            <sapn type="button" class="btn btn-primary export-selected"><i class="fadeIn animated bx bx-export "></i> {!! __('Export Selected :type',['type'=>__('')]) !!}</sapn>
                            <button type="button" class="btn btn-primary export-types bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                <a class="dropdown-item export-type" data-type="csv">CSV</a>
                                <a class="dropdown-item export-type" data-type="excel">Excel</a>
                                <a class="dropdown-item export-type" data-type="pdf">PDF</a>
                            </div>
                            <form action="{{ route('users.export') }}" method="POST" id="exportData" class="d-inline-block">
                                <input type="hidden" id="exportIDS" name="IDS">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                                {{--                            <button class="btn btn-info export-selected"><i class="fadeIn animated bx bx-export"></i> {!! __('Export Selected :type',['type'=>__('User')]) !!}</button>--}}
                            </form>
                        </div>
                        <div class="btn-group mt-1 mb-1">
                            <sapn type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-export"></i>{{ __('Export') }}</sapn>
                            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                <a class="dropdown-item export-type" data-type="csv">CSV</a>
                                <a class="dropdown-item export-type" data-type="excel">Excel</a>
                                <a class="dropdown-item export-type" data-type="pdf">PDF</a>
                            </div>
                            <form action="{{ route('users.export') }}" method="POST" class="d-inline-block">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                                {{--                            <button class="btn btn-info "><i class="fadeIn animated bx bx-export"></i> {{ __('Export') }}</button>--}}
                            </form>
                        </div>


                    @endif
                    @if(PerUser('users.destroy'))
                        <a href="#" class="btn btn-danger delete-selected"><i class="fadeIn animated bx bx-trash-alt"></i> {!! __('Delete Selected :type',['type'=>__('User')]) !!}</a>
                    @endif
                    @if(PerUser('users.create'))
                        <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fadeIn animated bx bx-message-square-add"></i> {{ __('Create :type',['type'=>__('User')]) }}</a>
                    @endif
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('Users') }}</h4>
                    </div>
                    <hr>
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered table-striped mb-0"></table>--}}
{{--                    </div>--}}
                    <div class="table-responsive">
                        {{ $dataTable->table(['class' => 'table table-bordered table-striped mb-0','style'=>'width:100%']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footerScripts')
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        $(document).on('click','.export-type',function(e){
            e.preventDefault();
            let form=$(this).parent().parent().find('form');
            form.find('[name="export_type"]').val($(this).attr('data-type'));
            form.submit();
        });
        function checkMultiDeleteButton(){
           if($(".user-checkbox").is(':checked')){
               $(".delete-selected").removeClass('disabled');
               $(".export-selected,.export-types").removeClass('disabled');
           }else{
               $(".delete-selected").addClass('disabled');
               $(".export-selected,.export-types").addClass('disabled');

           }
        }
        checkMultiDeleteButton();
        $(document).on('click','.delete-selected',function(){
            let IDS=[];
            $('.user-checkbox:checked').each(function(){
                IDS.push($(this).val());
            });
            Swal.fire({
                title: '{{ __('Do you really want to delete this?') }}',
                showCancelButton: true,
                confirmButtonText: '{{ __('Yes') }}',
                cancelButtonText: '{{ __('No') }}',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('users.multi_destroy') }}",
                        data:{IDS},
                        success: function (msg) {
                            window.LaravelDataTables["users"].draw();
                            Swal.fire(msg.message, '', msg.success?'success':'error');
                        }
                    });

                }
            });
        });
        function addSelectedCount(){
            $(".selectedCount").text($(".user-checkbox:checked").length);
            let IDS=[];
            $('.user-checkbox:checked').each(function(){
                IDS.push($(this).val());
            });
            $("#exportIDS").val(IDS);
        }
        $(document).on('change','#selectAllCheckbox',function(){
            $('table#users tbody input[type="checkbox"].user-checkbox').prop('checked',$(this).is(':checked'));
            checkMultiDeleteButton();
            addSelectedCount();
        });;
        $(document).on('change','.user-checkbox',function (){
            checkMultiDeleteButton();
            addSelectedCount();
        });;
        @if(PerUser('users.destroy'))
        $(document).on('click','.delete-this',function(e){
            e.preventDefault();
            let el=$(this);
            let url=el.attr('data-url');
            let id=el.attr('data-id');
            Swal.fire({
                title: '{{ __('Do you really want to delete this?') }}',
                showCancelButton: true,
                confirmButtonText: '{{ __('Yes') }}',
                cancelButtonText: '{{ __('No') }}',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        success: function (msg) {
                            window.LaravelDataTables["users"].draw();
                            Swal.fire(msg.message, '', msg.success?'success':'error');
                        }
                    });

                }
            });
        });
        @endif
    </script>
@endpush
