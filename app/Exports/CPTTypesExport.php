<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\ProviderType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CPTTypesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $cpt_types=CPTType::query();
        if(request('IDS')){
            $cpt_types=$cpt_types->whereIn('id',explode(',',request('IDS')));
        }
        return $cpt_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($cpt_type) : array {
        return [
            $cpt_type->id,
            $cpt_type->parent?$cpt_type->parent->title:__('No Parent'),
            $cpt_type->title,
            $cpt_type->description,
            $cpt_type->created_at?$cpt_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Parent'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
