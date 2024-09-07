<?php

namespace App\Exports;

use App\Models\ProviderLevel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderLevelsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $provider_levels=ProviderLevel::query();
        if(request('IDS')){
            $provider_levels=$provider_levels->whereIn('id',explode(',',request('IDS')));
        }
        return $provider_levels;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($provider_level) : array {
        return [
            $provider_level->id,
            $provider_level->title,
            $provider_level->description,
            $provider_level->created_at?$provider_level->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Title'),
            __('Description'),
            __('Created At')
        ] ;
    }
}
