<?php

namespace App\Exports;

use App\Models\CPTType;
use App\Models\row;
use App\Models\ProviderType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProviderPriceListsRowsFromExcelExport implements WithMapping, WithHeadings,FromCollection
{


    protected $rows;
    protected $heading_arr;
    


    public function __construct($rows)
    {
        $this->rows = $rows;
       $heading_arr =    $rows->first()  ;
       $this->heading_arr = $heading_arr;
    }
    public function collection()
    {
        return collect($this->rows);
    }


    public function map($row) : array {
        
       $row  ;
      
        
        return [
            $row->code ,
            $row->service_name_ar ,
            $row->service_name_en ,
            $row->service_medical_name ,
            $row->net_price ,
            $row->gross_price ,
            $row->net_price_start_date ,
            $row->gross_price_start_date ,
        ];
           
   
    }
    public function headings() : array {

        return [
            'code' ,
            'service_name_ar' ,
            'service_name_en' ,
            'service_medical_name' ,
            'net_price' ,
            'gross_price' ,
            'net_price_start_date' ,
            'gross_price_start_date' ,
            
           
        ] ;
    }
}
