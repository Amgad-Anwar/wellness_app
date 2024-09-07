<?php

namespace App\Exports;

use App\Models\Customer\ClientAccount;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClientAccountsExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $client_accounts=ClientAccount::query();
        if(request('IDS')){
            $client_accounts=$client_accounts->whereIn('id',explode(',',request('IDS')));
        }
        return $client_accounts;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($client_account) : array {
        return [
            $client_account->account_name,
            $client_account->owner_name,
            $client_account->customerType->type_name_en,
            $client_account->customerPackage->package_name_en,
            $client_account->start_date,
            $client_account->end_date,
            $client_account->email,
            $client_account->phone,
            $client_account->created_at->format('d M Y, h:i a')
        ] ;
    }
    public function headings() : array {
        return [
            __('Account Name'),
            __('Owner Name'),
            __('Customer Type'),
            __('Customer Package'),
            __('Start Date'),
            __('End Date'),
            __('Email'),
            __('Phone'),
            __('Created At'),
        ] ;
    }
}
