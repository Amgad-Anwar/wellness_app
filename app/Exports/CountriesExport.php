<?php

namespace App\Exports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CountriesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $countries=Country::query();
        if(request('IDS')){
            $countries=$countries->whereIn('id',explode(',',request('IDS')));
        }
        return $countries;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($language) : array {
        return [
            $language->name,
            $language->arab_name,
            $language->created_at?$language->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Arabic Name'),
            __('Created At')
        ] ;
    }
}
