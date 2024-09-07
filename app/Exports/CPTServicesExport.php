<?php

namespace App\Exports;

use App\Models\CPTCategory;
use App\Models\CPTService;
use App\Models\MedicalSpecialty;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CPTServicesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $cpt_services=CPTService::query();
        if(request('IDS')){
            $cpt_services=$cpt_services->whereIn('id',explode(',',request('IDS')));
        }
        return $cpt_services;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($cpt_service) : array {
        return [
            $cpt_service->id,
            $cpt_service->parent?$cpt_service->parent->title:__('No Parent'),
            $cpt_service->short_name,
            $cpt_service->long_name,
            $cpt_service->description,
            $cpt_service->created_at?$cpt_service->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Parent'),
            __('Short Name'),
            __('Long Name'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
