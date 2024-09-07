<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\OurPriceListsType;
use App\Models\ProviderType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OurPriceListsTypesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $our_price_lists_types=OurPriceListsType::query()->select('our_price_lists_types.id','provider_types.provider_type_title_en as provider_type_title','our_price_lists_types.name','our_price_lists_types.count','our_price_lists_types.status','our_price_lists_types.created_at')
            ->leftJoin('provider_types','provider_types.id','=','our_price_lists_types.provider_type_id');
        if(request('IDS')){
            $our_price_lists_types=$our_price_lists_types->whereIn('our_price_lists_types.id',explode(',',request('IDS')));
        }
        return $our_price_lists_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($our_price_lists_type) : array {
        return [
            $our_price_lists_type->id,
            $our_price_lists_type->provider_type_title,
            $our_price_lists_type->name,
            $our_price_lists_type->count,
            $our_price_lists_type->status,
            $our_price_lists_type->created_at?$our_price_lists_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Provider Type'),
            __('Name'),
            __('Count'),
            __('Status'),
            __('Created At')
        ] ;
    }
}
