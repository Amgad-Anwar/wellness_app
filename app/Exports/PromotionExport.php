<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\Promotion;
use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PromotionExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=Promotion::query();
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
            $provider_service->code,
            $provider_service->type,
            $provider_service->expire_type,
            $provider_service->max_usage_for_customer,
            $provider_service->added_by,
            $provider_service->is_active == 0 ? "dis active" : "active" ,
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',
        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Code'),
            __('Type'),
            __('Expire Type'),
            __('max_usage_for_customer'),
            __('added_by'),
            __('is_active'),
            __('Created At')
        ] ;
    }
}
