<?php

namespace App\Exports;

use App\Models\AnatomyLayer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AnatomyLayersExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $anatomy_layers=AnatomyLayer::query();
        if(request('IDS')){
            $anatomy_layers=$anatomy_layers->whereIn('id',explode(',',request('IDS')));
        }
        return $anatomy_layers;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($medical_specialty) : array {
        return [
            $medical_specialty->id,
            $medical_specialty->parent?$medical_specialty->parent->title:__('No Parent'),
            $medical_specialty->title,
            $medical_specialty->description,
            $medical_specialty->created_at?$medical_specialty->created_at->format('d M Y, h:i a'):'',

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
