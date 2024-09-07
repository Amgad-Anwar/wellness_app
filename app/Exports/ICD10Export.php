<?php

namespace App\Exports;

use App\Models\ICD10;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ICD10Export implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $icd10=ICD10::query();
        if(request('IDS')){
            $icd10=$icd10->whereIn('id',explode(',',request('IDS')));
        }
        return $icd10;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($icd10) : array {
        return [
            $icd10->id,
            $icd10->parent?$icd10->parent->description:__('No Parent'),
            config('app.ICD10.type.'.$icd10->type),
            $icd10->description,
            $icd10->code,
            $icd10->status,
            $icd10->waiting_period,
            config('app.ICD10.gender.'.$icd10->gender),
            config('app.ICD10.marital_status.'.$icd10->marital_status),
            $icd10->from_age,
            $icd10->to_age,
            $icd10->created_at?$icd10->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Parent'),
            __('Type'),
            __('Description'),
            __('Code'),
            __('Status'),
            __('Waiting Period'),
            __('Gender'),
            __('Marital Status'),
            __('from_age'),
            __('to_age'),
            __('Created At')
        ] ;
    }
}
