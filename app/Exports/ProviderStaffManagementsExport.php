<?php

namespace App\Exports;

use App\Models\ProviderAccount;
use App\Models\ProviderStaffManagement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderStaffManagementsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_staff_managements=ProviderStaffManagement::query();
        if(request('IDS')){
            $provider_staff_managements=$provider_staff_managements->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_staff_managements;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_staff_management) : array {
        return [
            $provider_staff_management->full_name,
            $provider_staff_management->email ?? '----',
            $provider_staff_management->phone ?? '----',
            $provider_staff_management->created_at?$provider_staff_management->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Full Name'),
            __('Email'),
            __('Phone'),
            __('Created At')
        ] ;
    }
}
