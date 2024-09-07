<?php

namespace App\Exports;

use App\Models\ProviderType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderTypesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_types=ProviderType::query();
        if(request('IDS')){
            $provider_types=$provider_types->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_types;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_type) : array {
        return [
            $provider_type->id,
            $provider_type->parent?$provider_type->parent->provider_type_title_en:__('No Parent'),
            $provider_type->provider_type_title_en,
            $provider_type->provider_type_description_en ?? '----',
            $provider_type->created_at?$provider_type->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Parent'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
