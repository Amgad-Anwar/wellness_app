<?php

namespace App\Exports;

use App\Models\Advertising;
use App\Models\ProviderService;
use App\Models\Tutorail;
use App\Models\TutorailCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TutorailExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $Tutorail=Tutorail::query();
        if(request('IDS')){
            $Tutorail=$Tutorail->whereIn('id',explode(',',request('IDS')));
        }
        return $Tutorail;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($Tutorail) : array {
        return [
            $Tutorail->id,
            $Tutorail->title,
            $Tutorail->description,
            $Tutorail->iframe,
            $Tutorail->created_at?$Tutorail->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('ID'),
            __('Title'),
            __('Description'),
            __('Iframe'),
            __('Created At')
        ] ;
    }
}
