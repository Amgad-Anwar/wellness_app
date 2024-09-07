<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MappingsDataTableImport implements ToCollection, WithChunkReading,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function __construct($tableName,$match_columns)
    {
        $this->tableName=$tableName;
        $this->match_columns=$match_columns;
    }

    public function collection(Collection $rows)
    {
        //
        //dd($this->match_columns);
        foreach ($rows as $row) {
            $array=[];
            foreach ($this->match_columns as $key=>$value){
                $array[$key]=$row[$value];
            }
            $array['created_at']=now();
            $array['updated_at']=now();
            $array['created_by']=auth()->id();
             DB::table($this->tableName)->insert($array);
        }

    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
