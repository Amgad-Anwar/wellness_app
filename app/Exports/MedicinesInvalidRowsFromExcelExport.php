<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\Medicine;
use App\Models\ProviderType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MedicinesInvalidRowsFromExcelExport implements WithMapping, WithHeadings,FromCollection
{


    protected $medicines;
    protected $heading_arr;
    


    public function __construct($medicines)
    {
       $this->medicines = $medicines;
       $heading_arr =  json_decode(  $medicines->first()->row ,true ) ;
       $heading_arr['errors'] =  $medicines->first()->errors;
       $this->heading_arr = $heading_arr;
    }
    public function collection()
    {
        return collect($this->medicines);
    }


    public function map($medicine) : array {
        
        $row = json_decode( $medicine->row ,true )  ;
        $row['errors'] = json_encode( $medicine->errors ) ;
        
        return 
            $row
        ;
    }
    public function headings() : array {

        return  array_keys($this->heading_arr) ;
    }
}
