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
                @if (request()->has('provider_id') ) 
                @php
                 
                  $provider =  App\Models\ProviderBranch::where('id', request()->query('provider_id'))->first()->providerAccount->provider_account_name_en ?? "not found";
                @endphp 
                  
              @endif

              @if (request()->has('customer_id') ) 
                @php
                   $customer_name = App\Models\Customer\CustomerList::where('id',  request()->query('customer_id') )->first()->account_name ?? 'No Scanning';
                @endphp 
                  
               @endif
                <div class="breadcrumb-title pr-3">{{ __(' Subscription Transactions') }}  </div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i> {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-shape-polygon"></i> {{ __('Subscription Transactions') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="ml-auto">
                    @if(PerUser('provider_levels.export'))
                        <div class="btn-group mt-1 mb-1">
                            <span type="button" class="btn btn-primary export-selected"><i class="fadeIn animated bx bx-export"></i> {!! __('Export Selected :type',['type'=>'']) !!}</span>
                            <button type="button" class="btn btn-primary export-types bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                <a class="dropdown-item export-type" data-type="csv">CSV</a>
                                <a class="dropdown-item export-type" data-type="excel">Excel</a>
                                <a class="dropdown-item export-type" data-type="pdf">PDF</a>
                            </div>
                            <form action="{{ route('subscription_transaction.export') }}" method="POST" id="exportData" class="d-inline-block">
                                <input type="hidden" id="exportIDS" name="IDS">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                                {{--                            <button class="btn btn-info export-selected"><i class="fadeIn animated bx bx-export"></i> {!! __('Export Selected :type',['type'=>__('Currencie')]) !!}</button>--}}
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
                            <form action="{{ route('subscription_transaction.export') }}" method="POST" class="d-inline-block">
                                <input type="hidden" name="export_type" value="excel">
                                @csrf
                                {{--                            <button class="btn btn-info "><i class="fadeIn animated bx bx-export"></i> {{ __('Export') }}</button>--}}
                            </form>
                        </div>


                    @endif
                    {{-- @if(PerUser('provider_levels.destroy'))
                        <a href="#" class="btn btn-danger delete-selected"><i class="fadeIn animated bx bx-trash-alt"></i> {!! __('Delete Selected :type',['type'=>'']) !!}</a>
                    @endif --}}
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __(' Subscription Transactions') }} {{  $customer_name ??  $provider ??  " " }} </h4>
                    </div>
                    <div class="col-12" data-toggle="tooltip" data-placement="top"
                        title="{{ __('Select items for change') }}">
                        <form method="GET" action="{{ route('subscription_transaction.index') }}">

                            <div class="row">
                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <select name="type_id" class="select2" id="type_id">
                                            <option value="">{{ __('Filter by :type', ['type' => __('Type')]) }}
                                            </option>
                                            @foreach (App\Models\Customer\CustomerType::all() as $level)
                                                <option @if (request()->has('type_id') && request()->query('type_id') == $level->id) selected="selected" @endif
                                                    value="{{ $level->id }}">{{ $level->type_name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <select name="package_id" class="select2" id="package_id">
                                            <option value="">{{ __('Filter by :type', ['type' => __('Package')]) }}
                                            </option>
                                            {{-- @foreach (App\Models\Customer\CustomerPackage::all() as $level)
                                                <option @if (request()->has('package_id') && request()->query('package_id') == $level->id) selected="selected" @endif
                                                    value="{{ $level->id }}">{{ $level->package_name_en }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>

                           
                                <div class="col-3">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-success"
                                            id="changeProviderType">{{ __('Show') }}</button>
                                    </div>
                                </div>
                            </div>






                        </form>
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
    @if (request()->has('type_id'))
    <script>
        $("#package_id").parent().addClass('loading');
        $.ajax({
            type: "POST",
            url: "{{ route('subscription_transaction.get.packages') }}",
            data: {
                'type_id': '{{ request()->type_id }}'
            },
            success: function(msg) {
                $("#package_id").html(msg.html).trigger('change.select2');
                $('#package_id').parent().removeClass('loading');
            }
        });
    </script>
@endif
<script>
    $(document).on('change', '#type_id', function() {
        el = $(this);
        let type_id = el.val();
        el.parent().addClass('loading');
        $('#package_id').parent().addClass('loading');
        $.ajax({
            type: "POST",
            url: "{{ route('subscription_transaction.get.packages') }}",
            data: {
                type_id
            },
            success: function(msg) {
                el.parent().removeClass('loading');
                $("#package_id").html(msg.html).trigger('change.select2');
                $('#package_id').parent().removeClass('loading');
            }
        });
    });
</script>
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
                        url: "{{ route('subscription_transaction.multi_destroy') }}",
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
    </script>
@endpush
