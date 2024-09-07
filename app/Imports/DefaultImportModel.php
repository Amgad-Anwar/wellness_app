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

class DefaultImportModel implements ToModel, WithChunkReading,WithHeadingRow
{
    private $modelClass,$existCol;
    public function __construct($modelClass,$existCol=[],$match_columns=null)
    {
        $this->modelClass=$modelClass;
        $this->existCol=$existCol;
        $this->match_columns=$match_columns;
    }
    public function model(array $dataUpdateOrCreate)
    {
        $whereArray=[];
       foreach ($this->existCol as $col){
           if(isset($dataUpdateOrCreate[$col])){
               $whereArray[$col]=$dataUpdateOrCreate[$col];
           }
       }
       if($whereArray){
           $model=$this->modelClass::where($whereArray)->first();
           if($model){
               $model->update($dataUpdateOrCreate);
           }else{
               $this->modelClass::create($dataUpdateOrCreate);
           }
       }else{
           $this->modelClass::create($dataUpdateOrCreate);
       }
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
