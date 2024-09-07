<?php

namespace App\Exports;

use App\Models\SponsorCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SponsorCategoriesExport implements WithMapping, WithHeadings,FromQuery
{
    public function query()
    {
        $sponsor_categories=SponsorCategory::query();
        if(request('IDS')){
            $sponsor_categories=$sponsor_categories->whereIn('id',explode(',',request('IDS')));
        }
        return $sponsor_categories;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($sponsor_category) : array {
        return [
            $sponsor_category->sponsor_category_title_en,
            $sponsor_category->created_at->format('d M Y, h:i a')
        ] ;
    }
    public function headings() : array {
        return [
            __('Title'),
            __('Created At'),
        ] ;
    }
}
