@extends('dashboard.layouts.app')
@push('headStyles')
@endpush
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">{{ __('Data Count') }}</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i>
                                    {{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><i class="bx bx-shape-polygon"></i>
                                {{ __('Data Count') }}</li>
                        </ol>
                    </nav>
                </div>

                <div class="ml-auto">

                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('Provider Module') }}</h4>
                    </div>
                    <hr>

                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col"> {{ __('Module Name') }} </th>
                                <th scope="col">{{ __('Count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('Providers') }}</td>
                                <td>{{ $providers_count }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Branches') }}</td>
                                <td>{{ $branches_count }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Staff Management') }}</td>
                                <td>{{ $staffs_count }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Approved Provider Requests') }}</td>
                                <td>{{ $provider_requests_approved_count }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Pending Provider Requests') }}</td>
                                <td>{{ $provider_requests_others_count }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Providers Price Lists') }}</td>
                                <td>{{ $provider_price_lists_count }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>



            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('Customer Module') }}</h4>
                    </div>
                    <hr>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col"> {{ __('Module Name') }} </th>
                                <th scope="col">{{ __('Count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('Client Account') }}</td>
                                <td>{{ $client_account }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Customer List') }}</td>
                                <td>{{ $customer_list }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Client Requests') }}</td>
                                <td>{{ $client_requests }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Client Approved Requests') }}</td>
                                <td>{{ $client_approved_requests }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Casemanagement') }}</td>
                                <td>{{ $casemanagement }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Customer Types') }}</td>
                                <td>{{ $types }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Customer Packages') }}</td>
                                <td>{{ $packages }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('Financial Module') }}</h4>
                    </div>
                    <hr>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col"> {{ __('Module Name') }} </th>
                                <th scope="col">{{ __('Count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('Subscriptions') }}</td>
                                <td>{{ $total_subscribtion ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Resubscriptions') }}</td>
                                <td>{{ $total_resubscribtion ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Generated Transaction') }}</td>
                                <td>{{ $generated_transaction ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('UnPaid Transaction') }}</td>
                                <td>{{ $un_paid_transaction ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Paid Transaction') }}</td>
                                <td>{{ $paid_transaction ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Refunded Transaction') }}</td>
                                <td>{{ $refund_transaction ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Services') }}</td>
                                <td>{{ $total_services ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Transactions') }}</td>
                                <td>{{ $total_transactions ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Providers Duepaid') }}</td>
                                <td>{{ $total_providers_duepaid ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Amount of Duepaid') }}</td>
                                <td>{{ $total_amount_of_due_paid ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Providers Was Paid') }}</td>
                                <td>{{ $total_providers_waspaid ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Amount of Was Paid') }}</td>
                                <td>{{ $total_amount_of_was_paid ?? 0 }}</td>
                            </tr>
                           
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('OutCome Module') }}</h4>
                    </div>
                    <hr>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col"> {{ __('Module Name') }} </th>
                                <th scope="col">{{ __('Count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('Providers') }}</td>
                                <td>{{ number_format( $providers_count  , 2)  ?? 0}}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Providers Account In Month') }}</td>
                                <td>{{ number_format(   $providers_acount_in_month , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Due Paid Amount') }}</td>
                                <td>{{ number_format(  $total_due_paid_amount  , 2)  ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Due Paid Amount In Month') }}</td>
                                <td>{{ number_format( $total_due_paid_amount_in_month   , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Paid Amount') }}</td>
                                <td>{{ number_format( $total_paid_amount  , 2)  ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Paid Amount In Month') }}</td>
                                <td>{{ number_format( $total_paid_amount_in_month  , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Points') }}</td>
                                <td>{{  number_format( $total_points  , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Paymob Fees') }}</td>
                                <td>{{ number_format(   $total_paymob_fees , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Paymob Fees In Month') }}</td>
                                <td>{{  number_format(  $total_paymob_fees_in_month  , 2) ?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Taxes') }}</td>
                                <td>{{  number_format( $total_taxes   , 2)?? 0 }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Total Taxes In Month') }}</td>
                                <td>{{  number_format( $total_taxes_in_month   , 2)?? 0 }}</td>
                            </tr>
                           
                        </tbody>
                    </table>

                </div>
            </div>


            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">{{ __('InCome Module') }}</h4>
                    </div>
                    <hr>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col"> {{ __('Module Name') }} </th>
                                <th scope="col">{{ __('Count') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('Overhead') }}</td>
                                <td>{{ number_format( $overhead_count  , 2)  ?? 0}}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Overhead Count In Month') }}</td>
                                <td>{{ number_format( $overhead_count_in_month  , 2)  ?? 0}}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Overhead Amount') }}</td>
                                <td>{{ number_format( $overhead_amount  , 2)  ?? 0}}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Overhead Amount In Month') }}</td>
                                <td>{{ number_format( $overhead_amount_in_month  , 2)  ?? 0}}</td>
                            </tr>
                          
                           
                           
                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
@endsection
@push('footerScripts')
@endpush
