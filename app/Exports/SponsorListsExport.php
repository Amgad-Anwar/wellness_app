<?php

namespace App\Exports;

use App\Models\SponsorList;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SponsorListsExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $sponsor_lists=SponsorList::query();
        if(request('IDS')){
            $sponsor_lists=$sponsor_lists->whereIn('id',explode(',',request('IDS')));
        }
        return $sponsor_lists;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($sponsor_list) : array {
        return [
            $sponsor_list->sponsor_name_en,
            $sponsor_list->sponsorCategory->sponsor_category_title_en,
            $sponsor_list->created_at->format('d M Y, h:i a')
        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Sponsor Category'),
            __('Created At'),
        ] ;
    }
}
