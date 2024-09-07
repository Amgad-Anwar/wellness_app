<?php

namespace App\Exports;

use App\Models\AnatomyCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AnatomyCategoriesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $anatomy_categories=AnatomyCategory::query();
        if(request('IDS')){
            $anatomy_categories=$anatomy_categories->whereIn('id',explode(',',request('IDS')));
        }
        return $anatomy_categories;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($anatomy_category) : array {
        return [
            $anatomy_category->id,
            $anatomy_category->parent?$anatomy_category->parent->title:__('No Parent'),
            $anatomy_category->title,
            $anatomy_category->description,
            $anatomy_category->created_at?$anatomy_category->created_at->format('d M Y, h:i a'):'',

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
