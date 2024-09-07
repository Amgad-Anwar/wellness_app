<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderService;
use App\Models\TutorailCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TutorailCategoryExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $TutorailCategory=TutorailCategory::query();
        if(request('IDS')){
            $TutorailCategory=$TutorailCategory->whereIn('id',explode(',',request('IDS')));
        }
        return $TutorailCategory;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($TutorailCategory) : array {
        return [
            $TutorailCategory->id,
            $TutorailCategory->title,
            $TutorailCategory->description,
            $TutorailCategory->created_at?$TutorailCategory->created_at->format('d M Y, h:i a'):'',

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
