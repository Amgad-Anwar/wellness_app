<?php

namespace App\Exports;

use App\Models\ProviderAccount;
use App\Models\ProviderAccountsPriceList;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderAccountsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_accounts=ProviderAccount::query();
        if(request('IDS')){
            $provider_accounts=$provider_accounts->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_accounts;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_account) : array {

        $price_list_count = ProviderAccountsPriceList::selectRaw("provider_accounts_price_lists.id,")
            ->join('provider_accounts', 'provider_accounts.id', '=', 'provider_accounts_price_lists.provider_account_id')

            ->join('provider_accounts_price_lists_public_prices', function ($join) {
                $join->on('provider_accounts_price_lists_public_prices.provider_account_price_list_id', '=', 'provider_accounts_price_lists.id')
                    ->where('provider_accounts_price_lists_public_prices.start_date', '<=', now()->format('Y-m-d H:i:s') )
                    ->where(function ($q) {
                        $q->where('provider_accounts_price_lists_public_prices.end_date', '>', now()->format('Y-m-d H:i:s') )
                            ->orWhereNull('provider_accounts_price_lists_public_prices.end_date');
                    })
                    ->whereNull('provider_accounts_price_lists_public_prices.deleted_at')
                    ->where('provider_accounts_price_lists_public_prices.status' , 'active');
               })
            ->join('provider_types', 'provider_accounts_price_lists.provider_type_id', '=', 'provider_types.id')
            ->where('provider_accounts_price_lists.provider_account_id', $provider_account->id )
            ->where('provider_accounts_price_lists.provider_is_active' , 1)
            ->where('provider_accounts_price_lists.status' , '!=','rejected' )
            ->where('provider_accounts_price_lists.is_active' ,1)
            ->count()
           ;
           
        return [
            $provider_account->provider_account_name_en,
            $provider_account->provider_account_name_ar,
            $provider_account->branches->where('status' , 'approved')->count(),
            $provider_account->staffs->count(),
            implode( ',' , $provider_account->ProviderTypes->pluck('provider_type_title_en')->toArray() )  ,
            implode( ',' , $provider_account->ProviderSpecialities->pluck('provider_type_title_en')->toArray() )  ,
            implode( ',' ,  $provider_account->ProviderPriceListsType->where('type', 'custom_price')->pluck('id')->toArray() ) ,
            $price_list_count  ,
            $provider_account->email,
            $provider_account->mode,
            $provider_account->status,
            $provider_account->has_refund == '1' ? "yes" : "no",
            $provider_account->provider_account_description_en ?? '----',
            $provider_account->provider_account_description_ar ?? '----',
            $provider_account->created_at?$provider_account->created_at->format('d M Y, h:i a'):'',
            $provider_account->start_date?$provider_account->start_date:'',
            $provider_account->end_date?$provider_account->end_date:'',
            User::find($provider_account->created_by ?? 0)?->name ?? ''  ,
            User::find($provider_account->updated_by ?? 0)?->name ?? ''  ,

        ] ;
    }
    public function headings() : array {
        return [
            __('Name En'),
            __('Name Ar'),
            __('branches count'),
            __('staff count'),
            __('provider types'),
            __('provider specialities'),
            __('price list ids'),
            __('total services'),
            __('email'),
            __('mode'),
            __('status'),
            __('has_refund'),
            __('Description En'),
            __('Description Ar'),
            __('Created At'),
            __('start_date'),
            __('end_date'),
            __('created by'),
            __('updated by'),
        ] ;
    }
}
