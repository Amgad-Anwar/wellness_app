<?php

namespace App\Exports;

use App\Models\CPTCategory;
use App\Models\MedicalSpecialty;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CPTCategoriesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $cpt_categoires=CPTCategory::query();
        if(request('IDS')){
            $cpt_categoires=$cpt_categoires->whereIn('id',explode(',',request('IDS')));
        }
        return $cpt_categoires;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($cpt_category) : array {
        return [
            $cpt_category->id,
            $cpt_category->parent?$cpt_category->parent->title:__('No Parent'),
            $cpt_category->title,
            $cpt_category->description,
            $cpt_category->created_at?$cpt_category->created_at->format('d M Y, h:i a'):'',

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
