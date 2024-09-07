<?php

namespace App\Exports;

use App\Models\UsersTitle;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersTitlesExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $users_titles=UsersTitle::query();
        if(request('IDS')){
            $users_titles=$users_titles->whereIn('id',explode(',',request('IDS')));
        }
        return $users_titles;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($language) : array {
        return [
            $language->department?$language->department->title:'',
            $language->reportingToUsersTitle?$language->reportingToUsersTitle->title:'',
            $language->title,
            $language->status,
            $language->created_at?$language->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Department'),
            __('Reporting To'),
            __('Title'),
            __('Status'),
            __('Created At')
        ] ;
    }
}
