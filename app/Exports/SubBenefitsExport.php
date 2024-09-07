<?php

namespace App\Exports;

use App\Models\Benefits;
use App\Models\ServiceType;
use App\Models\SubBenefits;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubBenefitsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $service_types=SubBenefits::query();
        if(request('IDS')){
            $service_types=$service_types->whereIn('id',explode(',',request('IDS')));
        }
        return $service_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($service_type) : array {
        return [
            $service_type->title,
            $service_type->description,
            $service_type->created_at?$service_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
