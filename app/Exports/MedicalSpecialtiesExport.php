<?php

namespace App\Exports;

use App\Models\MedicalSpecialty;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MedicalSpecialtiesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $medical_specialties=MedicalSpecialty::query();
        if(request('IDS')){
            $medical_specialties=$medical_specialties->whereIn('id',explode(',',request('IDS')));
        }
        return $medical_specialties;
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
