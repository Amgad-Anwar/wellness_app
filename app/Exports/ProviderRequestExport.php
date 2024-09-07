<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderRequest;
use App\Models\ProviderService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderRequestExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=ProviderRequest::query();
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
            $provider_service->provider_name ,
            $provider_service->owner_name ,
            $provider_service->title_ar ,
            $provider_service->branches_count ,
            $provider_service->email ,
            $provider_service->phone ,
            $provider_service->status ,
            $provider_service->created_at?->format('d M Y, h:i a') ,
    

        ] ;
    }
    public function headings() : array {
        return [
            __('ID') ,
            __('provider_name') ,
            __('owner_name') ,
            __('branches_count') ,
            __('email') ,
            __('phone') ,
            __('status') ,
            __('Created At') ,
        ] ;
    }
}
