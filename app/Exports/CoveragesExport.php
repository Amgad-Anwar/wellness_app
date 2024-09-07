<?php

namespace App\Exports;

use App\Models\Coverage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CoveragesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $coverages=Coverage::query();
        if(request('IDS')){
            $coverages=$coverages->whereIn('id',explode(',',request('IDS')));
        }
        return $coverages;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($coverage) : array {
        return [
            $coverage->id,
            $coverage->title,
            $coverage->description,
            $coverage->created_at?$coverage->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('id'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
