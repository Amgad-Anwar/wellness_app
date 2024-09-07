<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements WithMapping, WithHeadings,FromQuery
{

    public function query()
    {
        $users=User::query();
        if(request('IDS')){
            $users=$users->whereIn('id',explode(',',request('IDS')));
        }
        return $users;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function map($user) : array {
        return [
            $user->name,
            $user->created_at?$user->created_at->format('d M Y, h:i a'):'',

        ] ;
    }
    public function headings() : array {
        return [
            __('Name'),
            __('Created At')
        ] ;
    }
}
