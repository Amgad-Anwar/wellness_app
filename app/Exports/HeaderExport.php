<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HeaderExport implements  WithHeadings
{
    private $header ;
    public function __construct($header)
    {
        foreach ($header as $k=>$item){
           $header[$k]=ucfirst(str_replace('_',' ',$item));
        }
        $this->header=$header;
    }
    public function headings(): array
    {
        return$this->header;
    }
}
