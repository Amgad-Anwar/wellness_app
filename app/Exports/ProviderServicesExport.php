<?php

namespace App\Exports;

use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderServicesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=ProviderService::query();
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
            $provider_service->ProviderType?$provider_service->ProviderType->provider_type_title_en:__('No Provider Type'),
            $provider_service->title,
            $provider_service->description ?? '----',
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Provider Type'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
