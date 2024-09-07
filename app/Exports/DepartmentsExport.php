<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DepartmentsExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $departments=Department::query();
        if(request('IDS')){
            $departments=$departments->whereIn('id',explode(',',request('IDS')));
        }
        return $departments;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($language) : array {
        return [
            $language->parent?$language->parent->title:'',
            $language->title,
            $language->number_in_cycle,
            $language->auto_assign,
            $language->created_at?$language->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Parent'),
            __('Title'),
            __('Number In Cycle'),
            __('Auto Assign'),
            __('Created At')
        ] ;
    }
}
