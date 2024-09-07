<?php

namespace App\Exports;

use App\Models\Gender;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GendersExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $genders=Gender::query();
        if(request('IDS')){
            $genders=$genders->whereIn('id',explode(',',request('IDS')));
        }
        return $genders;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($gender) : array {
        return [
            $gender->id,
            $gender->title,
            $gender->description,
            $gender->created_at?$gender->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
