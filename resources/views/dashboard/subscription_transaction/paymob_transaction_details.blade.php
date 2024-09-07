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
                <div class="breadcrumb-title pr-3">{{ __('Paymob Transaction Details') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i> {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-shape-polygon"></i> {{ __('Paymob Transaction Details') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="ml-auto">
                    @if(PerUser('provider_levels.export'))
                        {{-- <div class="btn-group mt-1 mb-1">
                            <span type="button" class="btn btn-primary export-selected"><i class="fadeIn animated bx bx-export"></i> {!! __('Export Selected :type',['type'=>'']) !!}</span>
                            <button type="button" class="btn btn-primary export-types bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                <a class="dropdown-item export-type" data-type="csv">CSV</a>
                                <a class="dropdown-item export-type" data-type="excel">Excel</a>
                                <a class="dropdown-item export-type" data-type="pdf">PDF</a>
                            </div>
                            <form action="{{ route('transactions.export') }}" method="POST" id="exportData" class="d-inline-block">
                                <input type="hidden" id="exportIDS" name="IDS">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                            </form>
                        </div>
                        <div class="btn-group mt-1 mb-1">
                            <span type="button" class="btn btn-primary"><i class="fadeIn animated bx bx-export"></i>{{ __('Export') }}</span>
                            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                <a class="dropdown-item export-type" data-type="csv">CSV</a>
                                <a class="dropdown-item export-type" data-type="excel">Excel</a>
                                <a class="dropdown-item export-type" data-type="pdf">PDF</a>
                            </div>
                            <form action="{{ route('transactions.export') }}" method="POST" class="d-inline-block">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                            </form>
                        </div> --}}


                    @endif
                    @if(PerUser('provider_levels.destroy'))
                        {{-- <a href="#" class="btn btn-danger delete-selected"><i class="fadeIn animated bx bx-trash-alt"></i> {!! __('Delete Selected :type',['type'=>'']) !!}</a> --}}
                    @endif
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('Paymob Transaction Details') }}</h4>
                    </div>
                    <hr>
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-bordered table-striped mb-0"></table>--}}
{{--                    </div>--}}
                    <div class="table-responsive">
                        @foreach ($response as $key=>$res)
                            <div>
                                <span> {{ json_encode($key) }} : {{ json_encode($res) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footerScripts')
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    {{-- {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        $(document).on('click','.export-type',function(e){
            e.preventDefault();
            let form=$(this).parent().parent().find('form');
            form.find('[name="export_type"]').val($(this).attr('data-type'));
            form.submit();
        });
        function checkMultiDeleteButton(){
           if($(".transaction-checkbox").is(':checked')){
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
            $('.transaction-checkbox:checked').each(function(){
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
                        url: "{{ route('transactions.multi_destroy') }}",
                        data:{IDS},
                        success: function (msg) {
                            window.LaravelDataTables["transactions"].draw();
                            Swal.fire(msg.message, '', msg.success?'success':'error');
                        }
                    });

                }
            });
        });
        function addSelectedCount(){
            $(".selectedCount").text($(".transaction-checkbox:checked").length);
            let IDS=[];
            $('.transaction-checkbox:checked').each(function(){
                IDS.push($(this).val());
            });
            $("#exportIDS").val(IDS);
        }
        $(document).on('change','#selectAllCheckbox',function(){
            $('table#transactions tbody input[type="checkbox"].transaction-checkbox').prop('checked',$(this).is(':checked'));
            checkMultiDeleteButton();
            addSelectedCount();
        });;
        $(document).on('change','.transaction-checkbox',function (){
            checkMultiDeleteButton();
            addSelectedCount();
        });
        @if(PerUser('provider_levels.destroy'))

        $(document).on('click','.delete-this',function(e){
            e.preventDefault();
            let el=$(this);
            let url=el.attr('data-url');
            console.log(url);
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
                            window.LaravelDataTables["transactions"].draw();
                            Swal.fire(msg.message, '', msg.success?'success':'error');
                        }
                    });

                }
            });
        });
        @endif
    </script> --}}
@endpush
