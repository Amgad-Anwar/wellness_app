<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\Customer\CustomerList;
use App\Models\ProviderBranch;
use App\Models\ProviderService;
use App\Models\TransactionReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TransactionReportExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=TransactionReport::query();
        if(request('IDS')){
            $provider_services=$provider_services->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_services;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_service) : array {
        return [
            $provider_service->id,
            ProviderBranch::where('id', $provider_service->provider_branch_id)->first()?->providerAccount?->provider_account_name_en ?? " " ,
            CustomerList::where('id', $provider_service->customer_id)->first()->account_name ?? " " ,
            $provider_service->comment,
            $provider_service->status,
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('branch'),
            __('customer'),
            __('comment'),
            __('status'),
            __('Created At')
        ] ;
    }
}
