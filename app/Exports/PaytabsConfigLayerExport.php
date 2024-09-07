<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\PaymobConfigLayer;
use App\Models\PaytabsConfigLayer;
use App\Models\Promotion;
use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PaytabsConfigLayerExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=PaytabsConfigLayer::query();
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
            $provider_service->start_date,
            $provider_service->end_date,
            $provider_service->fixed_amount,
            $provider_service->percentage_rate,
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',
        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('start_date'),
            __('end_date'),
            __('fixed_amount'),
            __('percentage_rate'),
            __('Created At')
        ] ;
    }
}
