<?php

namespace App\Exports;

use App\Models\AgeGroup;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AgeGroupsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $age_groups=AgeGroup::query();
        if(request('IDS')){
            $age_groups=$age_groups->whereIn('id',explode(',',request('IDS')));
        }
        return $age_groups;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($age_group) : array {
        return [
            $age_group->id,
            $age_group->title,
            $age_group->description,
            $age_group->created_at?$age_group->created_at->format('d M Y, h:i a'):'',

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
