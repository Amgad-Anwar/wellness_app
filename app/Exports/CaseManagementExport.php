<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\CaseManagement;
use App\Models\Customer\CustomerList;
use App\Models\ProviderBranch;
use App\Models\ProviderService;
use App\Models\TransactionReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CaseManagementExport implements WithMapping, WithHeadings, FromQuery
{

    public function query()
    {
        $provider_services = CaseManagement::query();
        if (request('IDS')) {
            $provider_services = $provider_services->whereIn('id', explode(',', request('IDS')));
        }
        return $provider_services;
    }
    /**
     * @return \Illuminate\Support\Collection
     */

    public function map($provider_service): array
    {
        return [
             $provider_service->id ,
             $provider_service->customer->account_name ?? " " ,
             $provider_service->status ,
             $provider_service->subject ,
             $provider_service->description ,
             $provider_service->phone_number ,
             $provider_service->created_at?->format('d M Y, h:i a') ,

        ];
    }
    public function headings(): array
    {
        return [
            __('ID'),
            __('customer'),
            __('status'),
            __('subject'),
            __('description'),
            __('phone'),
            __('Created At'),
        ];
    }
}
