<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AdvertisingExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=Advertising::query();
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
            $provider_service->title_en,
            $provider_service->title_ar,
            $provider_service->link,
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Title En'),
            __('Title Ar'),
            __('Link'),
            __('Created At')
        ] ;
    }
}
