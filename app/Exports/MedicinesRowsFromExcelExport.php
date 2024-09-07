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

class MedicinesRowsFromExcelExport implements WithMapping, WithHeadings,FromCollection
{


    protected $medicines;
    protected $heading_arr;
    


    public function __construct($medicines)
    {
        $this->medicines = $medicines;
       $heading_arr =    $medicines->first()  ;
       $this->heading_arr = $heading_arr;
    }
    public function collection()
    {
        return collect($this->medicines);
    }


    public function map($medicine) : array {
        
       $medicine  ;
      
        
        return [
            $medicine->name ,
            $medicine->med_id ,
            $medicine->price ,
            $medicine->effective_date ,
        ];
           
   
    }
    public function headings() : array {

        return [
            'name' ,
            'medicine id' ,
            'price' ,
            'effective_date' ,
        ] ;
    }
}
