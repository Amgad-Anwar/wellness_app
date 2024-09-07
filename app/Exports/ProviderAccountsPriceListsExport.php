<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\ProviderAccountsPriceList;
use App\Models\ProviderAccountsPriceListPricesCheckoutLogs;
use App\Models\ProviderType;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderAccountsPriceListsExport implements WithMapping, WithHeadings,FromQuery
{

    private $paplt;
    public function __construct($paplt)
    {
        $this->paplt=$paplt;
    }

    public function query()
    {
        $provider_accounts_price_list=ProviderAccountsPriceList::query()->select('provider_accounts_price_lists.id','provider_types.provider_type_title_en as provider_type_title','provider_accounts.provider_account_name_en AS provider_account_name','provider_accounts_price_lists.code','provider_accounts_price_lists.service_name_ar','provider_accounts_price_lists.service_name_en','provider_accounts_price_lists.service_medical_name','provider_accounts_price_lists.created_at',
        DB::raw('COALESCE((SELECT price FROM provider_accounts_price_lists_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS net_price'),
        DB::raw('COALESCE((SELECT start_date FROM provider_accounts_price_lists_public_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS price_start_date'),
        DB::raw('COALESCE((SELECT end_date FROM provider_accounts_price_lists_public_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS price_end_date'),
        DB::raw('COALESCE((SELECT public_price FROM provider_accounts_price_lists_public_prices WHERE provider_account_price_list_id = provider_accounts_price_lists.id AND start_date <= NOW() AND (end_date > NOW() OR end_date IS NULL) AND deleted_at IS NULL LIMIT 1), 0) AS gross_price')
        )
            ->leftJoin('provider_types','provider_types.id','=','provider_accounts_price_lists.provider_type_id')
            ->leftJoin('provider_accounts','provider_accounts.id','=','provider_accounts_price_lists.provider_account_id')
            ->where('provider_accounts_price_lists_type_id',$this->paplt->id);
        if(request('IDS')){
            $provider_accounts_price_list=$provider_accounts_price_list->whereIn('provider_accounts_price_lists.id',explode(',',request('IDS')));
        }
        return $provider_accounts_price_list;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($medicine) : array {
        try {
            return [
                $medicine->id,
                $medicine->provider_account_name,
                $medicine->provider_type_title,
                $medicine->generated_code,
                $medicine->code,
                $medicine->service_name_ar,
                $medicine->service_name_en,
                $medicine->service_medical_name,
                $medicine->service_type_title,
                $medicine->net_price,
                $medicine->gross_price,
                $medicine->gross_price - $medicine->net_price ,
                (($medicine->gross_price - $medicine->net_price) / $medicine->net_price?? 1 )  ,
                json_encode( $medicine->cptServices->pluck('id')->toArray() ) ,
                ProviderAccountsPriceListPricesCheckoutLogs::where(
                    'provider_accounts_price_list_id',
                    $medicine->id,
                )->count() ,
              
                $medicine->department,
            
                $medicine->services_note,
                $medicine->services_level,
                $medicine->type,
                $medicine->services_description,
                $medicine->status,
                $medicine->price_start_date,
                $medicine->price_end_date == '0' ? "till now" : $medicine->price_end_date ,
                $medicine->created_at?$medicine->created_at->format('d M Y, h:i a'):'',
    
            ] ;
        } catch (\Throwable $th) {
            //throw $th;
        }
      
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Provider Account'),
            __('Provider Type'),
            __('generated_code'),
            __('Code'),
            __('Service Name AR'),
            __('Service Name EN'),
            __('Service Medical Name'),
            __('Service Type'),
            __('Net Price'),
            __('Gross Price'),
            __('margin_amount'),
            __('margin_percent'),
            __('cpt_codes'),
            __('usage_count'),
            __('Department'),
            __('Services Note'),
            __('Services Level'),
            __('Type'),
            __('Services Description'),
            __('Status'),
            __('start_date'),
            __('end_date'),
            __('Created At')
        ] ;
    }
}
