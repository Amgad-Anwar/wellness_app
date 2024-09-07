<?php

namespace App\Imports;

use App\Models\ProviderAccount;
use App\Models\ProviderAccountsPriceList;
use App\Models\ProviderAccountsPriceListsPrice;
use App\Models\ProviderAccountsPriceListsPublicPrices;
use App\Models\ProviderAccountsPriceListsType;
use DateTime;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProviderAccountsPriceListsImport implements ToCollection, WithChunkReading, WithHeadingRow
{
    public $match_columns = [];
    public $paplt;
    public function __construct($match_columns, $paplt)
    {
        $this->match_columns = $match_columns;
        $this->paplt = $paplt;
        ini_set('memory_limit', '-1');
        set_time_limit(0);
    }
    public function collection(Collection $rows)
    {
        // $paplt=ProviderAccountsPriceListsType::find(request()->paplt);
        $paplt = $this->paplt;
        $fails_rows_array_with_errors = [];
        Session::put('date_error',  0);

        $rows_count = $rows->count();


        //dd($this->match_columns);
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();

        $validationRules = [

            'service_name_en' => 'required|max:255',
            'service_name_ar' => 'required|max:255',
            'service_medical_name' => 'max:255',
            //  'net_price' => 'required|numeric|max:500000' ,
            //  'gross_price' => 'required|numeric|max:500000',
            'code' => 'required',

        ];
        $validationRules["start_date"] = 'required|date_format:m/d/Y,d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s';
        $customErrorMessages = [
            'service_name_en.required' => 'The English service name is required.',
            'service_name_ar.required' => 'The Arabic service name is required.',
            'service_medical_name.required' => 'The medical service name is required.',
            'net_price.required' => 'The net price is required.',
            'net_price.numeric' => 'The net price must be a numeric value.',
            'gross_price.required' => 'The gross price is required.',
            'gross_price.numeric' => 'The gross price must be a numeric value.',
            'code.required' => 'The code is required.',

            // Custom error messages for date formats
            'gross_price_start_date.required' => 'The gross price start date is required.',
            'gross_price_start_date.date_format' => 'The gross price start date must be in a valid date format.',
            'net_price_start_date.required' => 'The net price start date is required.',
            'net_price_start_date.date_format' => 'The net price start date must be in a valid date format.',
        ];

        if (Session::get('price_type') == "Net Price & Gross Price") {
            $validationRules["net_price"] = ['required', 'numeric','min:1', 'max:500000', 'lt:gross_price'];
            $validationRules["gross_price"] = 'required|numeric|max:500000|min:1';
          //  $validationRules["gross_price_start_date"] = 'required|date_format:m/d/Y,d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s';
           // $validationRules["net_price_start_date"] = 'required|date_format:m/d/Y,d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s';
        } elseif (Session::get('price_type') == "Net Price & Over Price From") {
            $validationRules["net_price"] = 'required|numeric|max:500000|min:1';
           // $validationRules["net_price_start_date"] = 'required|date_format:m/d/Y,d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s';
        } elseif (Session::get('price_type') == "Gross Price & Discount") {
            $validationRules["gross_price"] = 'required|numeric|max:500000|min:1';
            $validationRules["discount"] = 'required|numeric|min:0|max:99';
           // $validationRules["gross_price_start_date"] = 'required|date_format:m/d/Y,d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s';
        } else {
            $validationRules["net_price"] = 'required|numeric|max:500000|min:1';
            $validationRules["gross_price"] = 'required|numeric|max:500000|min:1';
            $validationRules["discount"] = 'required|numeric|min:0|max:99';
        }


        foreach ($rows as $number => $row) {
            
            $yy = (($number + 1) /  $rows_count) * 100;
            Session::put('medicine_progress', $yy);
            DB::table('progress_bar_count')->insert([
                'count' =>  $yy,
                'user_id' =>  auth()->id(),
            ]);

            $array = [];

            foreach ($this->match_columns as $key => $value) {
                $array[$key] = $row[$value];
            }
            $array['provider_account_id'] =  $paplt->provider_account_id;
            // $array['provider_type_id'] = $paplt->provider_type_id ;
            // $array['our_price_lists_type_id'] = $paplt->our_price_lists_type_id ;
            // $array['provider_accounts_price_lists_type_id'] = $paplt->id ;
            // $array['status'] = 'draft' ;
            $array['created_by'] = auth()->id() ?? 0;

            try {
                if (!empty($array['start_date'])) { //&&   ! is_numeric($array['start_date'])
                    $array['start_date'] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($array['start_date'])->format('d/m/Y');
                } else {
                    //Session::put('date_error',  1);
                }

                if (!empty($array['start_date'])) { //&&   ! is_numeric($array['start_date'])
                    $array['start_date'] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($array['start_date'])->format('d/m/Y');
                } else {
                    // Session::put('date_error',  1);
                }
            } catch (\Throwable $th) {
            }


            if (empty($array['service_medical_name'])) {
                $array['service_medical_name'] = "";
            }


            $validator = Validator::make($array, $validationRules,  $customErrorMessages);


            DB::beginTransaction();

            $provider = ProviderAccount::find($paplt->provider_account_id);

            try {
                if (!$validator->fails()) {


                   

                    if (Session::get('price_type') == "Net Price & Over Price From") { 
                        if ($provider->fees_type == "over_price") {
                            if ($provider->fees_amount_type == "percentage") {
                                $over =  $array['net_price'] * $provider->fees_amount / 100;
                            } else {
                                $over =   $provider->fees_amount;
                            }
                        }
                        $array['gross_price'] = $array['net_price'] +   $over;
                       // $array['gross_price_start_date']  =   $array['start_date'];
                    } elseif (Session::get('price_type') == "Gross Price & Discount") {
                        $array['net_price'] = $array['gross_price'] - ($array['gross_price'] *  $array['discount'] / 100);
                      //  $array['net_price_start_date']  =  $array['start_date'];
                    }
                    $array['gross_price_start_date']  =   $array['start_date'];
                    $array['net_price_start_date']  =  $array['start_date'];

                    if ($provider->fees_amount_type == "percentage") {
                        $over_margin =  $array['net_price'] * $provider->fees_amount / 100;
                    } else {
                        $over_margin =   $provider->fees_amount;
                    }
            

                    if ($array['net_price'] > $array['gross_price']) {
                        // $fails_rows_array_with_errors[$number] =  $validator->errors()->all();
                        $invalid_data_array = [];
                        $invalid_data_array['row'] = json_encode($row->toArray());
                        $invalid_data_array['errors'] =  json_encode(["gross price must be bigger than net price"]);
                        $invalid_data_array['created_by'] = auth()->id() ?? 0;
                        DB::table('provider_account_price_lists_import_invalid_rows')->insert($invalid_data_array);
                    }//elseif ( $over > ( $array['gross_price'] - $array['net_price'])  ) {
                        
                    //     $invalid_data_array = [];
                    //     $invalid_data_array['row'] = json_encode($row->toArray());
                    //     $invalid_data_array['errors'] =  json_encode([ "margin must be greater than " . $over ]);
                    //     $invalid_data_array['created_by'] = auth()->id() ?? 0;
                    //     DB::table('provider_account_price_lists_import_invalid_rows')->insert($invalid_data_array);
                    // }
                     else {


                        $excel_name_en_array = explode(" ",  trim($array['service_name_en']));
                        $price_list = ProviderAccountsPriceList::
                        where(function ($q) use( $array ) {
                            $q->where('code', $array['code'])
                            ->orWhere('generated_code', $array['generated_code'] ?? "0" )
                               ;
                        })
                        ->where('provider_account_id',   $paplt->provider_account_id)
                        ->where('provider_accounts_price_lists_type_id', $paplt->id)->first();


                        // foreach($excel_name_array as $word){
                        //     $pages->orWhere('content', 'LIKE', '%'.$word.'%');
                        // }

                        

                        if (!empty($price_list) && !empty($price_list->id)) {
                            $array['is_new'] = 0;
                            $array['has_changes'] = 0;
                            $array['old_service_name_ar'] = null;
                            $array['old_service_name_en'] = null;
                            $array['old_service_medical_name'] = null;
                            $array['old_net_price'] = null;
                            $array['old_gross_price'] = null;
                            $array['old_net_price_start_date'] = null;
                            $array['old_gross_price_start_date'] = null;



                            $excel_price_list_name_en_array = explode(" ",  trim($price_list->old_service_name_en));

                            $matching_name_en_count = 0;
                            foreach ($excel_name_en_array as $key => $value) {
                                if (in_array($value, $excel_price_list_name_en_array)) {
                                    $matching_name_en_count += 1;
                                }
                            }


                            $array['service_name_en_percent_matching'] = ($matching_name_en_count /  count($excel_name_en_array)) * 100;


                            if (trim($array['service_name_en'])  != trim($price_list->service_name_en)  && !empty( $price_list->service_name_en ) ) {
                                $array['old_service_name_en'] =   $price_list->service_name_en;
                                $array['has_changes'] = 1;
                            }
                            if (trim($array['service_name_ar'])  != trim($price_list->service_name_ar)  && !empty( $price_list->service_name_ar ) ) {
                                $array['old_service_name_ar'] =   $price_list->service_name_ar;
                                $array['has_changes'] = 1;
                            }
                            if (trim($array['service_medical_name'])  != trim($price_list->service_medical_name) && !empty( $price_list->service_medical_name ) ) {
                                $array['old_service_medical_name'] =   $price_list->service_medical_name;
                                $array['has_changes'] = 1;
                            }
                            $list_for_net_price = ProviderAccountsPriceListsPrice::where('provider_account_price_list_id', $price_list->id)
                            ->where('start_date', '<=', now()->format('Y-m-d H:i:s') )
                                ->where(function ($q) {
                                    $q->where('end_date', '>', now()->format('Y-m-d H:i:s'))
                                        ->orWhereNull('end_date');
                                })
                                ->first();
                            if (!empty($list_for_net_price) && !empty($list_for_net_price->price) && trim($array['net_price'])  != trim($list_for_net_price->price)) {
                                $array['old_net_price'] =  $list_for_net_price->price;
                                $array['has_changes'] = 1;
                            }
                            if (!empty($list_for_net_price) && !empty($list_for_net_price->start_date) && trim($array['net_price_start_date'])  != trim(DateTime::createFromFormat('Y-m-d H:i:s',  $list_for_net_price->start_date)->format('d/m/Y'))) {
                                $array['old_net_price_start_date'] =   DateTime::createFromFormat('Y-m-d H:i:s',  $list_for_net_price->start_date)->format('d/m/Y');
                                $array['has_changes'] = 1;
                            }



                            $list_for_gross_price = ProviderAccountsPriceListsPublicPrices::where('provider_account_price_list_id', $price_list->id)
                            ->where('start_date', '<=', now()->format('Y-m-d H:i:s') )
                            ->where(function ($q) {
                                $q->where('end_date', '>', now()->format('Y-m-d H:i:s'))
                                    ->orWhereNull('end_date');
                            })
                            ->first();
                            if (!empty($list_for_gross_price) && !empty($list_for_gross_price->public_price) &&   trim($array['gross_price'])  != trim($list_for_gross_price->public_price)) {
                                $array['old_gross_price'] =   $list_for_gross_price->public_price;
                                $array['has_changes'] = 1;
                            }

                            if (!empty($list_for_gross_price) && !empty($list_for_gross_price->start_date) &&    trim($array['gross_price_start_date'])  != trim(DateTime::createFromFormat('Y-m-d H:i:s', $list_for_gross_price->start_date)->format('d/m/Y'))) {
                                $array['old_gross_price_start_date'] =  DateTime::createFromFormat('Y-m-d H:i:s', $list_for_gross_price->start_date)->format('d/m/Y');
                                $array['has_changes'] = 1;
                            }


                            $gross_price_row = ProviderAccountsPriceListsPublicPrices::where('provider_account_price_list_id', $price_list->id)
                            ->where('start_date', '<=', now()->format('Y-m-d H:i:s') )
                            ->orderBy('id' , 'desc')
                            ->first();
                            $net_price_row = ProviderAccountsPriceListsPrice::where('provider_account_price_list_id', $price_list->id)
                            ->where('start_date', '<=', now()->format('Y-m-d H:i:s') )
                            ->orderBy('id' , 'desc')
                            ->first();

                            if (!empty($gross_price_row) && !empty($net_price_row) ) {
                                $array['old_percentage_rate'] = ($gross_price_row->public_price - $net_price_row->price) / $net_price_row->price * 100  ;
                                $array['current_percentage_rate'] = ($array['gross_price'] -  $array['net_price'] ) / $array['net_price']  * 100   ;
                            
                                if (  $array['current_percentage_rate']  >= $array['old_percentage_rate']) {
                                    $array['rate_status'] = 'increase' ;
                                }else{
                                    $array['rate_status'] = 'decrease' ;
                                }
                            }


                        } else {
                            $array['is_new'] = 1;
                            if ($provider->fees_type == "over_price") {
                                if ($provider->fees_amount_type == "percentage") {
                                    
                                    $over =  $array['net_price'] * $provider->fees_amount / 100 ;
                                    $array['old_percentage_rate'] = $provider->fees_amount  ; // / 100
                                    $array['current_percentage_rate'] = ( $array['gross_price'] - $array['net_price'] ) /  $array['net_price']  * 100 ;
                                
                                    if (  $array['current_percentage_rate']  >= $array['old_percentage_rate']) {
                                        $array['rate_status'] = 'increase' ;
                                    }else{
                                        $array['rate_status'] = 'decrease' ;
                                    }
                                
                                } else {
                                    $over =   $provider->fees_amount;

                                    if ( $over  > ($array['gross_price'] - $array['net_price'])) {
                                        $array['rate_status'] = 'decrease' ;
                                    }else{
                                        $array['rate_status'] = 'increase' ;
                                    }
                                    $array['current_percentage_rate'] = ($array['gross_price'] - $array['net_price']) /  $array['net_price']  * 100 ;
                                }
                            }
                           

                           
                        }


                      if ( (string) $over_margin >  (string) ( $array['gross_price'] - $array['net_price'])  ){
                        $array['margin_status'] = 'smaller' ;
                      }elseif ( (string) $over_margin ==  (string) ( $array['gross_price'] - $array['net_price'])  ) {
                        $array['margin_status'] = 'equal' ;
                      }else{
                        $array['margin_status'] = 'greater' ;
                      }
                      unset($array['start_date']);

                     // dd(  (string) $over_margin , (string) ( $array['gross_price'] - $array['net_price']) , (string) $over_margin  == (string)  ( $array['gross_price'] - $array['net_price'])  ,$array['gross_price'] , $array['net_price']  );
                        $founded_medicine = DB::table('provider_account_price_lists_import')
                            ->where('code',  $array['code'])
                            ->where('created_by',  auth()->id() ?? 0)
                            ->first();
                        if (empty($founded_medicine) && empty($founded_medicine->id)) {
                            unset($array["discount"]);
                            DB::table('provider_account_price_lists_import')->insert($array);
                        }
                    }
                } else {

                    if (count($validator->errors()->all()) <  (count($validationRules) - 1)) {
                        $fails_rows_array_with_errors[$number] =  $validator->errors()->all();
                        $invalid_data_array = [];
                        $invalid_data_array['row'] = json_encode($row->toArray());
                        $invalid_data_array['errors'] =  json_encode($validator->errors()->all());
                        $invalid_data_array['created_by'] = auth()->id() ?? 0;
                        DB::table('provider_account_price_lists_import_invalid_rows')->insert($invalid_data_array);
                    }
                }
                
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                throw $e;
            }
            Session::put('fails_rows_array_with_errors',  $fails_rows_array_with_errors);
        }
    }
    public function chunkSize(): int
    {
        // TODO: Implement chunkSize() method.
        return 1000;
    }
}
