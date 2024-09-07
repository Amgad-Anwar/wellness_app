<?php

namespace App\Exports;

use App\Models\Customer\CustomerType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomerTypesExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $customer_types=CustomerType::query();
        if(request('IDS')){
            $customer_types=$customer_types->whereIn('id',explode(',',request('IDS')));
        }
        return $customer_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($customer_type) : array {
        return [
            $customer_type->type_name_en,
            $customer_type->type_description_en,
            $customer_type->created_at?$customer_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
