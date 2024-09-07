<?php

namespace App\Imports;

use App\Models\OurPriceList;
use App\Models\OurPriceListsPrice;
use App\Models\OurPriceListsType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DefaultImportCollection implements ToCollection, WithChunkReading,WithHeadingRow
{
    private $tableName,$matches;
    public function __construct($tableName,$matches)
    {
        $this->tableName=$tableName;
        $this->matches=$matches;
    }
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){
            // TODO: Implement collection() method.
            $createData=[];

            foreach ($this->matches as $k=>$v){
                if(isset($row[$v])){
                    $createData[$k]=$row[$v];
                }
            }
            if($createData){
                DB::table($this->tableName)->insert(array_merge($createData,['created_at'=>now(),'updated_at'=>now()]));
            }
        }


    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
