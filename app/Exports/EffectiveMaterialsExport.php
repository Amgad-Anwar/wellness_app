<?php

namespace App\Exports;

use App\Models\MedicalSpecialty;
use App\Models\EffectiveMaterial;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EffectiveMaterialsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $effective_materials=EffectiveMaterial::query();
        if(request('IDS')){
            $effective_materials=$effective_materials->whereIn('id',explode(',',request('IDS')));
        }
        return $effective_materials;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($effective_material) : array {
        return [
            $effective_material->id,
            $effective_material->parent?$effective_material->parent->title:__('No Parent'),
            $effective_material->title,
            $effective_material->description,
            $effective_material->created_at?$effective_material->created_at->format('d M Y, h:i a'):'',

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
