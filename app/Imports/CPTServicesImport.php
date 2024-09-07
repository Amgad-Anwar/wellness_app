<?php

namespace App\Imports;

use App\Models\CPTCategory;
use App\Models\CPTService;
use App\Models\ProviderAccount;
use App\Models\ProviderAccountsPriceList;
use App\Models\ProviderAccountsPriceListsPrice;
use App\Models\ProviderAccountsPriceListsType;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CPTServicesImport implements ToModel, WithChunkReading,WithHeadingRow
{
    private $match_columns,$import_data;
    public function __construct($match_columns=[],$import_data=null)
    {
        $this->match_columns=$match_columns;
        $this->import_data=$import_data;
    }
   public function model(array $row)
   {
       // TODO: Implement model() method.
       if(!$this->match_columns){
           $parent_id=0;
           $cpt_category_id=0;
           if($row['parent']){
               if(!$cpt_service_parent=CPTService::where('short_name',$row['parent'])->first()){
                   $cpt_service_parent=CPTService::create(['short_name'=>$row['parent']]);
               }
               $parent_id=$cpt_service_parent->id;
           }
           if($row['cpt_category']){
               if(!$cpt_category=CPTCategory::where('title',$row['cpt_category'])->first()){
                   $cpt_category=CPTCategory::create(['title'=>$row['cpt_category']]);
               }
               $cpt_category_id=$cpt_category->id;
           }
           $createData=[
               'parent_id'=>$parent_id,
               'cpt_category_id'=>$cpt_category_id,
               'code'=>$row['code'],
               'short_name'=>$row['short_name'],
               'long_name'=>$row['long_name'],
               'description'=>$row['description'],
           ];
           CPTService::create($createData);
       }

   }
   public function chunkSize(): int
   {
       // TODO: Implement chunkSize() method.
       return 1000;
   }
}
