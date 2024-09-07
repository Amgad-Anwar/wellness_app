<?php

namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CitiesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $cities=City::query();
        if(request('IDS')){
            $cities=$cities->whereIn('id',explode(',',request('IDS')));
        }
        return $cities;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($city) : array {
        return [
            $city->name,
            $city->created_at?$city->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Created At')
        ] ;
    }
}
