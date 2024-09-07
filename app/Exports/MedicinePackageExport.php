<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\MedicinePackage;
use App\Models\ProviderService;
use App\Models\ProviderWithdrawalPaymentMethod;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MedicinePackageExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_services=MedicinePackage::query();
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
            $provider_service->name,
      
            $provider_service->created_at?$provider_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Title '),
         
            __('Created At')
        ] ;
    }
}
