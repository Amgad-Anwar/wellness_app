<?php

namespace App\Exports;

use App\Models\CPTType;

use App\Models\ProviderType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomersGroupsInvalidRowsFromExcelExport implements WithMapping, WithHeadings,FromCollection
{


    protected $customers;
    protected $heading_arr;
    


    public function __construct($customers)
    {
        $this->customers = $customers;
       $heading_arr =  json_decode(  $customers->first()->row ,true ) ;
       $heading_arr['errors'] =  $customers->first()->errors;
       $this->heading_arr = $heading_arr;
    }
    public function collection()
    {
        return collect($this->customers);
    }


    public function map($customer) : array {
        
        $row = json_decode( $customer->row ,true )  ;
        $row['errors'] = json_encode( $customer->errors ) ;
        
        return 
            $row
        ;
    }
    public function headings() : array {

        return  array_keys($this->heading_arr) ;
    }
}
