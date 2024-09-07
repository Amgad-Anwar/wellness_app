<?php

namespace App\Exports;

use App\Models\State;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StatesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $states=State::query();
        if(request('IDS')){
            $states=$states->whereIn('id',explode(',',request('IDS')));
        }
        return $states;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($language) : array {
        return [
            $language->name,
            $language->created_at?$language->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Created At')
        ] ;
    }
}
