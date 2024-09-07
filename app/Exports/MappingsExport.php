<?php

namespace App\Exports;

use App\Models\Mapping;
use App\Models\MedicalSpecialty;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MappingsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $mapping=Mapping::query();
        if(request('IDS')){
            $mapping=$mapping->whereIn('id',explode(',',request('IDS')));
        }
        return $mapping;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($mapping) : array {
        return [
            $mapping->cpt_service_id,
            $mapping->services_mapping_code,
            $mapping->services_mapping_name,
            $mapping->created_at?$mapping->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Service Mapping Code'),
            __('Services Mapping Name'),
            __('Created At')
        ] ;
    }
}
