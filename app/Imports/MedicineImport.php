<?php

namespace App\Imports;

use App\Models\Medicine;
use App\Models\MedicineDosageForm;
use App\Models\MedicinePackage;
use App\Models\MedicineRoute;
use App\Models\ProviderMedicinesPrice;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDate;

class MedicineImport implements ToCollection, WithChunkReading, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public $match_columns = [];
    public function __construct($match_columns)
    {
        $this->match_columns = $match_columns;
        ini_set('memory_limit', '-1');
        set_time_limit(0);
    }

    public function collection(Collection $rows)
    {

        
        $dateFormats = [
            'd/m/Y',
            'm-d-Y',
            'Y-m-d',
            'd.m.Y',
            'Y/m/d',
            'd-m-Y',
            'Y.m.d',
            'F d, Y',           // e.g., "September 21, 2023"
            'M d, Y',            // e.g., "Sep 21, 2023"
            'd F Y',             // e.g., "21 September 2023"
            'd M Y',             // e.g., "21 Sep 2023"
            'Y F d',             // e.g., "2023 September 21"
            'Y M d',             // e.g., "2023 Sep 21"
            'd/m/y',             // e.g., "21/09/23"
            'm-d-y',             // e.g., "09-21-23"
            'y-m-d',             // e.g., "23-09-21"
            'd.m.y',             // e.g., "21.09.23"
            'y/m/d',             // e.g., "23/09/21"
            'd-m-y',             // e.g., "21-09-23"
            'y.m.d',             // e.g., "23.09.21"
            'd-M-y',             // e.g., "21-Sep-23"
            'M-d-y',             // e.g., "Sep-21-23"
            'y-M-d',             // e.g., "23-Sep-21"
            'd/M/y',             // e.g., "21/Sep/23"
            'M/d/y',             // e.g., "Sep/21/23"
            'y/M/d',             // e.g., "23/Sep/21"
            'd/M/Y',             // e.g., "21/Sep/2023"
            'M/d/Y',             // e.g., "Sep/21/2023"
            'Y/M/d',             // e.g., "2023/Sep/21"
            'd M Y',             // e.g., "21 Sep 2023"
            'd F, Y',            // e.g., "21 September, 2023"
            'd/m/Y H:i:s'       // e.g., "21/09/2023 14:30:00"
        ];

        // dd( $dateFormatRules );
        $validationRules = [
            //'Medicine Name' => 'required|max:1' , // Replace 'column1' with your actual column name
            'name' => 'required|max:255',
            'name_ar' => 'max:255',
            'med_id' => 'required',
            'price' => 'required|numeric',
            'effective_date' => 'nullable|date_format:d F Y,d/m/Y,m-d-Y,Y-m-d,d.m.Y,Y/m/d,d-m-Y,Y.m.d,d M Y,Y F d,Y M d,d/m/y,m-d-y,y-m-d,d.m.y,y/m/d,d-m-y,y.m.d,d-M-y,M-d-y,y-M-d,d/M/y,M/d/y,y/M/d,d/M/Y,M/d/Y,Y/M/d,d M Y,d/m/Y H:i:s',
            'international_barcode' => 'max:255',
            'pharmacy_barcode' => 'max:255',
            'company' => 'max:255',
            'medicine_route_id' => 'max:255',
            'chapter' => 'numeric',
            'mechanism_of_action' => 'string',
            'recommended_dose' => 'string',
            'medicine_dosage_form_id' => 'max:255',
            'concentration' => 'string',
            'medicine_package_id' => 'max:255',
            'package_unit' => 'max:255',
            'maximum_dose' => 'max:300',
            'maximum_duration' => 'max:300',
            'uses' => 'string',
            'side_effects' => 'string',
            'drug' => 'max:300',
            'type_of_interaction' => 'max:300',
            'alternative' => 'max:300',
            'age_group' => 'max:255',
            'gender' => 'max:255',
            'recurrence_period' => 'max:300',
            'related_diagnosis' => 'string',
            'contraindication_case' => 'string',
            'contraindication_precautions' => 'string',
            'insurance_coverage' => 'max:255',
     
            
        ];
        $customErrorMessages = [
            'name.required' => 'Name is required.',
            'med_id.required' => 'Medicine ID is required.',
            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be a numeric value.',
            'effective_date.required' => 'Effective date is required.',
            'effective_date.date_format' => 'Effective date must be excel formated',
        ];
        $fails_rows_array_with_errors = [];
        Session::put('date_error',  0);
        $rows_count = $rows->count();
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();
        foreach ($rows as $number => $row) {

            $yy = (($number + 1) /  $rows_count) * 100;
            DB::table('progress_bar_count')->insert([
                'count' =>  $yy,
                'user_id' =>  auth()->id(),
            ]);
            $array = [];
            foreach ($this->match_columns as $key => $value) {
                $array[$key] = $row[$value];
            }
            try {
                if (!empty($array['effective_date'])) {
                    $array['effective_date'] = SharedDate::excelToDateTimeObject($array['effective_date'])->format('d/m/Y');
                } else {
                    Session::put('date_error',  1);
                }
            } catch (\Throwable $th) {
            }
            $validator = Validator::make($array, $validationRules,  $customErrorMessages);
            $array['created_by'] = auth()->id() ?? 0;
            DB::beginTransaction();
            try {
                if (!$validator->fails()) {
                    // dd(  $validator->errors()  );
                    $excel_med_id = $array['med_id'];
                    $excel_name_array = explode(" ",  trim($array['name']));
                    $excel_name_array = array_filter($excel_name_array);
                    $excel_name_array = array_map('trim', $excel_name_array);
                    $medicine = Medicine::where('med_id', $excel_med_id)->orWhere('name' , trim($array['name']) )->first(); // or name == $array['name']

                    if (!empty($medicine) && !empty($medicine->id)) {
                        $array['is_new'] = 0;
                        $array['has_changes'] = 0;
                        $array['old_name'] = null;
                        $array['old_price'] = null;
                        $array['old_effective_date'] = null;
                        $excel_medicine_name_array = explode(" ",  trim($medicine->name));
                        $excel_medicine_name_array = array_filter($excel_medicine_name_array);
                        $excel_medicine_name_array = array_map('trim', $excel_medicine_name_array);
                    
                        $matching_name_count = 0;

                        foreach ($excel_name_array as $key => $value) {
                            if (in_array( $value  , $excel_medicine_name_array)) {
                                $matching_name_count += 1;
                            }
                        }
                        if ($matching_name_count > 0) {
                            $array['name_percent_matching'] = ($matching_name_count /  count($excel_medicine_name_array)) * 100;
                        } else {
                            $array['name_percent_matching'] = 0;
                        }
                        if (trim($array['name'])  != trim($medicine->name)) {
                            $array['old_name'] =   $medicine->name;
                            $array['has_changes'] = 1;
                        }

                        if ( !empty( $array['international_barcode']  )  &&  trim($array['international_barcode'])  != trim($medicine->international_barcode)) {
                            $array['old_international_barcode'] =   $medicine->international_barcode;
                            $array['has_changes'] = 1;
                        }

                        //==============================

                        if ( !empty( $array['name_ar'] )  && trim($array['name_ar'])  != trim($medicine->medicine_name_ar)) {
                            $array['old_name_ar'] =   $medicine->medicine_name_ar;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['pharmacy_barcode'] )  && trim($array['pharmacy_barcode'])  != trim($medicine->pharmacy_barcode)) {
                            $array['old_pharmacy_barcode'] =   $medicine->pharmacy_barcode;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['company'] )  && trim($array['company'])  != trim($medicine->company)) {
                            $array['old_company'] =   $medicine->company;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['chapter'] )  && trim($array['chapter'])  != trim($medicine->chapter)) {
                            $array['old_chapter'] =   $medicine->chapter;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['mechanism_of_action'] )  && trim($array['mechanism_of_action'])  != trim($medicine->mechanism_of_action)) {
                            $array['old_mechanism_of_action'] =   $medicine->mechanism_of_action;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['recommended_dose'] )  && trim($array['recommended_dose'])  != trim($medicine->recommended_dose)) {
                            $array['old_recommended_dose'] =   $medicine->recommended_dose;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['concentration'] )  && trim($array['concentration'])  != trim($medicine->concentration)) {
                            $array['old_concentration'] =   $medicine->concentration;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['package_unit'] )  && trim($array['package_unit'])  != trim($medicine->package_unit)) {
                            $array['old_package_unit'] =   $medicine->package_unit;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['maximum_dose'] )  && trim($array['maximum_dose'])  != trim($medicine->maximum_dose)) {
                            $array['old_maximum_dose'] =   $medicine->maximum_dose;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['maximum_duration'] )  && trim($array['maximum_duration'])  != trim($medicine->maximum_duration)) {
                            $array['old_maximum_duration'] =   $medicine->maximum_duration;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['uses'] )  && trim($array['uses'])  != trim($medicine->uses)) {
                            $array['old_uses'] =   $medicine->uses;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['side_effects'] )  && trim($array['side_effects'])  != trim($medicine->side_effects)) {
                            $array['old_side_effects'] =   $medicine->side_effects;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['drug'] )  && trim($array['drug'])  != trim($medicine->drug)) {
                            $array['old_drug'] =   $medicine->drug;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['type_of_interaction'] )  && trim($array['type_of_interaction'])  != trim($medicine->type_of_interaction)) {
                            $array['old_type_of_interaction'] =   $medicine->type_of_interaction;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['alternative'] )  && trim($array['alternative'])  != trim($medicine->alternative)) {
                            $array['old_alternative'] =   $medicine->alternative;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['age_group'] )  && trim($array['age_group'])  != trim($medicine->age_group)) {
                            $array['old_age_group'] =   $medicine->age_group;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['gender'] )  && trim($array['gender'])  != trim($medicine->gender)) {
                            $array['old_gender'] =   $medicine->gender;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['recurrence_period'] )  && trim($array['recurrence_period'])  != trim($medicine->recurrence_period)) {
                            $array['old_recurrence_period'] =   $medicine->recurrence_period;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty($array['related_diagnosis']  )  && trim($array['related_diagnosis'])  != trim($medicine->related_diagnosis)) {
                            $array['old_related_diagnosis'] =   $medicine->related_diagnosis;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['contraindication_case'] )  && trim($array['contraindication_case'])  != trim($medicine->contraindication_case)) {
                            $array['old_contraindication_case'] =   $medicine->contraindication_case;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['contraindication_precautions'] )  && trim($array['contraindication_precautions'])  != trim($medicine->contraindication_precautions)) {
                            $array['old_contraindication_precautions'] =   $medicine->contraindication_precautions;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['insurance_coverage'] )  && trim($array['insurance_coverage'])  != trim($medicine->insurance_coverage)) {
                            $array['old_insurance_coverage'] =   $medicine->insurance_coverage;
                            $array['has_changes'] = 1;
                        }

                        if (!empty( $array['medicine_route_id'] ) ) {
                          $medicine_route= MedicineRoute::where('name' , trim( $array['medicine_route_id'] ) )->first();
                          if( $medicine_route ) {
                            $array['medicine_route_id'] = $medicine_route->id;
                          }else{
                            $medicine_route = MedicineRoute::create([
                                'name'=> $array['medicine_route_id'],
                            ]);
                            $array['medicine_route_id'] = $medicine_route->id;
                          }
                          if (trim($array['medicine_route_id'])  != trim($medicine->medicine_route_id)) {
                            $array['old_medicine_route_id'] =   $medicine->medicine_route_id;
                            $array['has_changes'] = 1;
                           }
                        }
                       

                        if (!empty( $array['medicine_dosage_form_id'] ) ) {
                            $MedicineDosageForm= MedicineDosageForm::where('name' , trim( $array['medicine_dosage_form_id'] ) )->first();
                            if( $MedicineDosageForm ) {
                              $array['medicine_dosage_form_id'] = $MedicineDosageForm->id;
                            }else{
                              $MedicineDosageForm = MedicineDosageForm::create([
                                  'name'=> $array['medicine_dosage_form_id'],
                              ]);
                              $array['medicine_dosage_form_id'] = $MedicineDosageForm->id;
                            }
                            if (trim($array['medicine_dosage_form_id'])  != trim($medicine->medicine_dosage_form_id)) {
                                $array['old_medicine_dosage_form_id'] =   $medicine->medicine_dosage_form_id;
                                $array['has_changes'] = 1;
                            }
                        }
                        

                        if (!empty( $array['medicine_package_id'] ) ) {
                            $MedicinePackage= MedicinePackage::where('name' , trim( $array['medicine_package_id'] ) )->first();
                            if( $MedicinePackage ) {
                              $array['medicine_package_id'] = $MedicinePackage->id;
                            }else{
                              $MedicinePackage = MedicinePackage::create([
                                  'name'=> $array['medicine_package_id'],
                              ]);
                              $array['medicine_package_id'] = $MedicinePackage->id;
                            }
                            if (trim($array['medicine_package_id'])  != trim($medicine->medicine_package_id)) {
                                $array['old_medicine_package_id'] =   $medicine->medicine_package_id;
                                $array['has_changes'] = 1;
                            }
                        }
                       
  




                        $medicine_price =  ProviderMedicinesPrice::where('medicine_id', $medicine->id)->first();
                        if (!empty($medicine_price) && !empty($medicine_price->price)   && $array['price'] !=  $medicine_price->price) {
                            $array['old_price'] =  $medicine_price->price;
                            $array['has_changes'] = 1;
                        }
                        if ($array['effective_date'] !=  $medicine->effective_date) {
                            $array['old_effective_date'] =  DateTime::createFromFormat('m/d/Y', $medicine->effective_date)->format('d/m/Y');
                            $array['has_changes'] = 1;
                        }
                    } else {
                        $array['is_new'] = 1;
                    }
                    $founded_medicine = DB::table('medicines_import')->where('med_id',  $array['med_id'])->first();
                    if (empty($founded_medicine) && empty($founded_medicine->id)) {
                      
                        DB::table('medicines_import')->insert($array);
                    }

                } else {
                   if ( count( $validator->errors()->all() ) > 0 ) {
                        $fails_rows_array_with_errors[$number] =  $validator->errors()->all();
                        $invalid_data_array = [];
                        $invalid_data_array['row'] = json_encode($row->toArray());
                        $invalid_data_array['errors'] =  json_encode($validator->errors()->all());
                        $invalid_data_array['created_by'] = auth()->id() ?? 0;
                        DB::table('medicines_import_invalid_rows')->insert($invalid_data_array);
                    }
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                $invalid_data_array['errors'] =  $e->getMessage();
                DB::table('medicines_import_invalid_rows')->insert($invalid_data_array);
                throw $e;
            }
        }
        Session::put('fails_rows_array_with_errors',  $fails_rows_array_with_errors);
    }
    public function chunkSize(): int
    {
        return 2000 ;
    }
}
