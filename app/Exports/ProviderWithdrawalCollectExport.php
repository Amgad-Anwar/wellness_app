<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderService;
use App\Models\ProviderWithdrawalCollect;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderWithdrawalCollectExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=ProviderWithdrawalCollect::query();
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
            $provider_service->transactions->count() ,
            $provider_service->total_net_price,
            $provider_service->provider->provider_account_name_en ?? " ",
            $provider_service->payment_method,
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Transactions Count'),
            __('Total Net Price'),
            __('Provider'),
            __('Payment Method'),
            __('Created At')
        ] ;
    }
}
