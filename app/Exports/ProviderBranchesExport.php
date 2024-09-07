<?php

namespace App\Exports;

use App\Models\ProviderAccount;
use App\Models\ProviderBranch;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderBranchesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_branches=ProviderBranch::where('status' , 'approved' );
        if(request('IDS')){
            $provider_branches=$provider_branches->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_branches;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_branch) : array {
        return [
            $provider_branch->providerAccount?->provider_account_name_en,
            $provider_branch->provider_address_ar ?? "",
            $provider_branch->provider_address_en ?? "",
            $provider_branch->provider_location_lat ?? "",
            $provider_branch->provider_location_lng ?? "",
            $provider_branch->country->name ?? "",
            $provider_branch->state->name ?? "",
            $provider_branch->city->name ?? "",
            json_encode( $provider_branch->phones->pluck('phone')->toArray() )   ?? "",
            $provider_branch->created_at?$provider_branch->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Provider Name'),
            __('Address Ar'),
            __('Address En'),
            __('provider_location_lat'),
            __('provider_location_lng'),
            __('country'),
            __('state'),
            __('city'),
            __('phones'),
          
            __('Created At')
        ] ;
    }
}
