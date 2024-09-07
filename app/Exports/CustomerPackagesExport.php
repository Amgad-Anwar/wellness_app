<?php

namespace App\Exports;

use App\Models\Customer\CustomerPackage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomerPackagesExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $customer_packages=CustomerPackage::query();
        if(request('IDS')){
            $customer_packages=$customer_packages->whereIn('id',explode(',',request('IDS')));
        }
        return $customer_packages;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($customer_package) : array {
        return [
            $customer_package->package_name_en,
            $customer_package->package_description_en,
            $customer_package->price,
            $customer_package->customerType->type_name_en,
            $customer_package->created_at?$customer_package->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Description'),
            __('Price'),
            __('Customer Type'),
            __('Created At')
        ] ;
    }
}
