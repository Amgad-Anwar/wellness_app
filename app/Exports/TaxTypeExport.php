<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderService;
use App\Models\TaxType;
use App\Models\TutorailCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TaxTypeExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $tax_type=TaxType::query();
        if(request('IDS')){
            $tax_type=$tax_type->whereIn('id',explode(',',request('IDS')));
        }
        return $tax_type;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($tax_type) : array {
        return [
            $tax_type->id,
            $tax_type->code,
            $tax_type->name_en,
            $tax_type->name_ar,
            $tax_type->created_at?$tax_type->created_at->format('d M Y, h:i a'):'',

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