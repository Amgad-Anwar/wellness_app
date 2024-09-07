<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\ProviderAccountsPriceListsType;
use App\Models\ProviderType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderAccountsPriceListsTypesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_accounts_price_lists_types=ProviderAccountsPriceListsType::query()
            ->select('provider_accounts_price_lists_types.id','provider_types.provider_type_title_en as provider_type_title','provider_accounts.provider_account_name_en AS provider_account_name','provider_accounts_price_lists_types.count','provider_accounts_price_lists_types.status','provider_accounts_price_lists_types.created_at')
            ->join('provider_accounts','provider_accounts.id','=','provider_accounts_price_lists_types.provider_account_id')
            ->leftJoin('provider_types','provider_types.id','=','provider_accounts_price_lists_types.provider_type_id');
        if(request('IDS')){
            $provider_accounts_price_lists_types=$provider_accounts_price_lists_types->whereIn('provider_accounts_price_lists_types.id',explode(',',request('IDS')));
        }
        return $provider_accounts_price_lists_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_accounts_price_lists_type) : array {
        return [
            $provider_accounts_price_lists_type->id,
            $provider_accounts_price_lists_type->provider_account_name,
            $provider_accounts_price_lists_type->provider_type_title,
            $provider_accounts_price_lists_type->count,
            $provider_accounts_price_lists_type->status,
            $provider_accounts_price_lists_type->created_at?$provider_accounts_price_lists_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Provider Account'),
            __('Provider Type'),
            __('Count'),
            __('Status'),
            __('Created At')
        ] ;
    }
}
