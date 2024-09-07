<?php

namespace App\Exports;

use App\Models\Currency;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CurrenciesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $currencies=Currency::query();
        if(request('IDS')){
            $currencies=$currencies->whereIn('id',explode(',',request('IDS')));
        }
        return $currencies;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($language) : array {
        return [
            $language->name,
            $language->short,
            $language->created_at?$language->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Short'),
            __('Created At')
        ] ;
    }
}
