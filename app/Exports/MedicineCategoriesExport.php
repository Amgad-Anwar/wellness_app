<?php

namespace App\Exports;

use App\Models\MedicalSpecialty;
use App\Models\MedicineCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MedicineCategoriesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $medical_categories=MedicineCategory::query();
        if(request('IDS')){
            $medical_categories=$medical_categories->whereIn('id',explode(',',request('IDS')));
        }
        return $medical_categories;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($medical_category) : array {
        return [
            $medical_category->id,
            $medical_category->parent?$medical_category->parent->title:__('No Parent'),
            $medical_category->title,
            $medical_category->description,
            $medical_category->created_at?$medical_category->created_at->format('d M Y, h:i a'):'',

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
