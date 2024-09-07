<?php

namespace App\Imports;

use App\Models\City;
use App\Models\Country;
use App\Models\Customer\ProviderBranchPhone;

use App\Models\Provider\ProviderBranches;
use App\Models\ProviderAccountPriceListsCptServices;
use App\Models\ProviderAccountsPriceList;
use App\Models\State;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProviderPriceListMappingImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
       

        foreach ($rows as $row) {
           $provider_accounts_price_list = ProviderAccountsPriceList::where('id' ,  $row['id'] )
            ->orWhere('generated_code',   $row['generated_code'] )->first() ;
   
            if (!empty(  $row['cpt_codes']   )) {
                ProviderAccountPriceListsCptServices::where( 'provider_accounts_price_list_id' , $provider_accounts_price_list->id)
                ->forceDelete();
                foreach ( json_decode( $row['cpt_codes']  )  as $key => $cpt_service_id ) {
            
                    ProviderAccountPriceListsCptServices::updateOrCreate([
                        'provider_accounts_price_list_id' => $provider_accounts_price_list->id ,
                        'cpt_service_id' => $cpt_service_id ,
                        'created_by' => auth()->id() ,
                    ]) ;
                }
            }
        }


    }
}
