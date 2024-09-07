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

class OurPriceListsImport implements ToModel, WithChunkReading,WithHeadingRow
{
    private $ourPriceListsTypes,$match_columns;
    public function __construct($ourPriceListsTypes=null,$match_columns=null)
    {
        $this->ourPriceListsTypes=$ourPriceListsTypes?$ourPriceListsTypes:OurPriceListsType::find(request()->our_price_lists_type);
        $this->match_columns=$match_columns;
    }
    public function model(array $row)
    {
        //dd($this->match_columns,$row,$row[$this->match_columns['code']]);
//        dd($row);
//        if($row['services_price']!=200){
//            dd($row);
//        }

        if(!$this->match_columns){
            //dd($row,\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['services_price_date']));

            $dataCreate=[
                'provider_type_id' => (request('provider_type_id'))?request('provider_type_id'):$this->ourPriceListsTypes->provider_type_id,
                'our_price_lists_type_id' => $this->ourPriceListsTypes->id,
            ];
            $ourPriceList=null;
            if(isset($row['code'])){
                $ourPriceList=OurPriceList::where(array_merge(['code' => $row['code']],$dataCreate))->first();
            }
            if(isset($row['service_name_ar'])){
                $ourPriceList=OurPriceList::where(array_merge(['service_name_ar' => $row['service_name_ar']],$dataCreate))->first();
            }
            $otherData=[
                'code' => $row['code'],
                'service_name_ar' => $row['service_name_ar'],
                'service_name_en' => $row['service_name_en'],
                'service_medical_name' => $row['service_medical_name'],
                'department' => $row['department'],
                'services_note' => $row['services_note'],
                'services_level' => $row['services_level'],
                'type' => $row['type'],
                'services_description' => $row['services_description'],

            ];

            if(!$ourPriceList){
                $ourPriceList= OurPriceList::create(array_merge($otherData,$dataCreate,['status' => 'published',
                    'created_by'=>auth()->id(),]));
            }else{
                $ourPriceList->update($otherData);
            }
            $dataCreate=[
                'provider_type_id' => $this->ourPriceListsTypes->provider_type_id,
                'our_price_lists_type_id' => $this->ourPriceListsTypes->id,
                'our_price_list_id' => $ourPriceList->id,
                'price' => $row['services_price'],
                'start_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['services_price_date']),
            ];
            $ourPriceListPrice=OurPriceListsPrice::where($dataCreate)->first();
            if(!$ourPriceList){
                $ourPriceListPrice=OurPriceListsPrice::create(array_merge($dataCreate,[
                    'status' => 'published',
                    'created_by'=>auth()->id(),
                ]));
            }
            $ourPriceListPrice;
        }else{
            $dataOurPriceListCreated=[
                'provider_type_id' => $this->ourPriceListsTypes->provider_type_id,
                'our_price_lists_type_id' => $this->ourPriceListsTypes->id,
                'status' => 'published',
                'created_by'=>auth()->id(),
            ];
            $dataOurPriceListPriceCreated=[
                'provider_type_id' => $this->ourPriceListsTypes->provider_type_id,
                'our_price_lists_type_id' => $this->ourPriceListsTypes->id,
                'status' => 'published',
                'created_by'=>auth()->id(),
            ];
            foreach ($this->match_columns as $key=>$value){
                if(!in_array($key,['services_price','services_price_date'])){
                    $dataOurPriceListCreated[$key]=$row[$value];
                    if(in_array($key,['service_name_ar','service_name_en'])){
                        $dataOurPriceListCreated['service_name'][str_replace('service_name_','',$key)]=$row[$value];
                    }
                }else{
                    if($key=='services_price'){
                        $dataOurPriceListPriceCreated['price']=$row[$value];
                    }else{
                        $dataOurPriceListPriceCreated['start_date']=\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[$value]);
                    }

                }
            }

            if(isset($dataOurPriceListCreated['code'])&&!$ourPriceList=OurPriceList::where('code',$dataOurPriceListCreated['code'])->first()){
                $ourPriceList->update($dataOurPriceListCreated);
            }else{
                $ourPriceList= OurPriceList::create($dataOurPriceListCreated);
            }
            $dataOurPriceListPriceCreated['our_price_list_id']=$ourPriceList->id;
            if(isset($dataOurPriceListPriceCreated['services_price'],$dataOurPriceListPriceCreated['start_date'])
                &&!$ourPriceListPrice= OurPriceListsPrice::where('services_price',$dataOurPriceListPriceCreated['services_price'])->where('start_date',$dataOurPriceListPriceCreated['start_date'])->first()){
                $ourPriceListPrice=OurPriceListsPrice::create($dataOurPriceListPriceCreated);
            }else{
                $ourPriceListPrice->update($dataOurPriceListPriceCreated);
            }
            return $ourPriceListPrice;
        }
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
