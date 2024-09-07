<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\ProviderType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MedicinesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $medicines=Medicine::query();
        if(request('IDS')){
            $medicines=$medicines->whereIn('id',explode(',',request('IDS')));
        }
        return $medicines;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($medicine) : array {
        return [
            $medicine->id,
            $medicine->med_id,
            $medicine->name,
            $medicine->created_at?$medicine->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Med ID'),
            __('name'),
            __('Created At')
        ] ;
    }
}
