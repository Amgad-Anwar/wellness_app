<?php

namespace App\Exports;

use App\Models\Customer\CustomerList;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomerListsExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $customer_lists=CustomerList::query();
        if(request('IDS')){
            $customer_lists=$customer_lists->whereIn('id',explode(',',request('IDS')));
        }
        return $customer_lists;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($customer_list) : array {
        return [
            $customer_list->account_name,
            $customer_list->clientAccount->account_name,
            $customer_list->credit,
            $customer_list->email,
            $customer_list->phone,
            $customer_list->created_at->format('d M Y, h:i a')
        ] ;
    }
    public function headings() : array {
        return [
            __('Account Name'),
            __('Client Account'),
            __('Credit'),
            __('Email'),
            __('Phone'),
            __('Created At'),
        ] ;
    }
}
