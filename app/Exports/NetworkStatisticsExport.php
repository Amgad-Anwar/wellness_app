<?php

namespace App\Exports;

use App\Models\ProviderAccountsProviderTypes;
use App\Models\ProviderBranch;
use App\Models\ProviderLevel;
use App\Models\ProviderType;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Country;
use App\Models\Customer\CustomerList;
use Illuminate\Support\Facades\Session;

use App\Models\State;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class NetworkStatisticsExport implements FromCollection, WithHeadings, FromQuery
{


    public $type;
    public function __construct($type)
    {

        $this->type = $type;
    }
    public function query()
    {
        if ($this->type  == 'City') {
            $rows = City::where('state_id', Session::get('state_id'))->orderBy('id', 'asc');
        } elseif ($this->type  == 'State') {
            $rows = State::where('country_id', 64)->orderBy('id', 'asc');
        } else {
            $rows = DB::table('countries')->where('id', 64)->orderBy('id', 'asc');
        }
        // dd( $rows );
        return $rows->get();
    }

    public function collection()
    {
        $rows = $this->query();
        //  dd( $rows );
        $main_array = [];

        foreach ($rows as $row) {

            if ($this->type == 'City') {
                $providers_types = branches_count('city_id', $row->id);
                $column = 'city_id';
            } elseif ($this->type == 'State') {
                $providers_types = branches_count('state_id', $row->id);
                $column = 'state_id';
            } else {
                $providers_types = branches_count('country_id', $row->id);
                $column = 'country_id';
            }

            $array = [
                $row->id,
                $row->name,
            ];

            $total_count = 0;

            foreach ($providers_types as $typee) {
                $total_count += $typee['total_count'] ?? 0;
                array_push($array, $typee['total_count'] == 0 ? '0' :$typee['total_count'] );
            }
            array_push($array, $total_count == 0 ? '0' : $total_count );
            array_push($array,  CustomerList::where( $column  ,$row->id )->count()  );
            array_push($main_array, $array);
        }

        if ($this->type == 'City') {
            $providers_types = branches_count_when_location_is_null('city');
        } elseif ($this->type == 'State') {
            $providers_types = branches_count_when_location_is_null('state');
        } else {
            $providers_types = branches_count_when_location_is_null('country');
        }

        $array_non_location = [
            '#',
            'Non Location',
        ];

        $total_count = 0;

        foreach ($providers_types as $typee) {
            $total_count += $typee['total_count'] ?? 0;
            array_push($array_non_location, $typee['total_count'] == 0 ? '0' :$typee['total_count'] );
        }
        array_push($array_non_location, $total_count == 0 ? '0' : $total_count );
        array_push($array_non_location,  CustomerList::whereNull( strtolower($this->type).'_id'  )->count() );
        array_push($main_array, $array_non_location);



        return collect($main_array);
    }
    /**
     * @return \Illuminate\Support\Collection
     */

    // public function map($row): array
    // {
    //     if ($this->type == 'City') {
    //         $providers_types = branches_count('city_id', $row->id);
    //     } elseif ($this->type == 'State') {
    //         $providers_types = branches_count('state_id', $row->id);
    //     } else {
    //         $providers_types = branches_count('country_id', $row->id);
    //     }

    //     $array = [
    //         $row->id,
    //         $row->name,
    //     ];

    //     $total_count = 'non';

    //     foreach ($providers_types as $typee) {
    //         $total_count += $typee['total_count']?? 'non';
    //         array_push($array, $typee['total_count'] == 0 ? '0' :$typee['total_count'] );
    //     }
    //     array_push($array, $total_count == 0 ? '0' : $total_count );

    //     return $array;
    // }
    public function headings(): array
    {
        $types = ProviderType::where('parent_id', 'non')->get();
        $array = [
            __('ID'),
            $this->type .   __('Name'),
        ];
        foreach ($types as $name) {
            array_push($array,  $name->provider_type_title_en);
        }
        array_push($array,  __('Total Count'));
        array_push($array,  __('Customers Count'));
        return  $array;
    }
}
