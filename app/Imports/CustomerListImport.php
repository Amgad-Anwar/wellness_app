<?php

namespace App\Imports;

use App\Models\CustomerListBeforeRegister;
use DateTime;

use App\Models\CustomerList;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Customer\ClientAccount;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\ProviderAccountsPriceListsPrice;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use App\Models\Customer\CustomerListBeforeSignup;
use App\Models\Customer\CustomerPackage;
use App\Models\ProviderAccountsPriceListsPublicPrices;
use Illuminate\Validation\Rule;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDate;


class CustomerListImport implements ToCollection, WithHeadingRow
{
    public $match_columns  = [];


    public function __construct($match_columns)
    {
        $this->match_columns = $match_columns;


    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
      
        // $customer_list=ProviderAccountsPriceListsType::find(request()->customer_list);
        $fails_rows_array_with_errors = [];
        Session::put('date_error',  0);
        $rows_count = $rows->count();
        //dd($this->match_columns);
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();

        $package = CustomerPackage::findOrFail(Session::get('package_id') ) ;
       // $client_account = ClientAccount::where('customer_package_id' ,   $package->id  )->first() ; 



        $validationRules = [
            'account_name' => 'nullable|string|max:255',
            // 'first_name' => 'required|string|max:100',
            // 'last_name' => 'required|string|max:100',
            'address' => 'nullable|string|max:500',
            //'phone' => 'required|unique:discountcard_customer_lists,phone|unique:customer_lists_before_signup,phone|regex:/^01\d{9}$/',

            'phone' => [
                'required',
                'regex:/^01\d{9}$/',
                Rule::unique('discountcard_customer_lists', 'phone')->whereNull('deleted_at'),
                Rule::unique('customer_lists_before_signup', 'phone')->whereNull('deleted_at'),
            ],
          //  'phone' => 'required',
            'email' => 'nullable|email',
            'gender' => 'nullable',
            'is_subscribed' => 'required|in:yes,no,Yes,No',
            'birth_date' => 'nullable',
            'nationality_id' => 'nullable|digits:14',

            'passport_id' => 'nullable|string',
            'max_sub_users' => 'nullable|numeric|min:0|max:10', 
            
        ];
        $customErrorMessages = [
          //  'account_name.required' => 'The account name is required.',
            'phone.regex' => 'The :attribute must be in the format 01xxxxxxxxx ',
            'account_name.max' => 'The account name must not exceed :max characters.',
            'first_name.max' => 'The first name must not exceed :max characters.',
            'last_name.max' => 'The last name must not exceed :max characters.',
            'address.max' => 'The address must not exceed :max characters.',
            'phone.required' => 'The phone number is required.',
            'phone.unique' => 'The phone number is already in use.',
            'phone.string' => 'The phone number must be a string.',
            'email.email' => 'Please provide a valid email address.',
            'nationality_id.integer' => 'The nationality ID must be an integer.',
            'passport_id.string' => 'The passport ID must be a string.',
        ];

        $index = 0 ;
        foreach ($rows as $number => $row) {
           // try {
                $index += 1;

            $yy = (($number + 1) /  $rows_count) * 100;
            Session::put('customer_list_progress', $yy);
            DB::table('progress_bar_count')->insert([
                'count' =>  $yy,
                'user_id' =>  auth()->id(),
            ]);
            $array = [];

            foreach ($this->match_columns as $key => $value) {
                $array[$key] = $row[$value];
            }
           
            /* $array['client_account_id'] =  $customer_list->client_account_id; */
            
            $array['created_by'] = auth()->id() ?? 0;
            $array['customer_type_id'] = $package->customerType->id ?? 0;
            $array['customer_package_id'] = $package->id ?? 0;
           // $array['client_account_id'] =  0;

           $array['is_subscribed'] = strtolower( $array['is_subscribed'] );
           if(empty('max_sub_users')) {
               $array['max_sub_users'] = 0;
           }
         
           try {
                if (!empty($array['birth_date'])) {
                    $array['birth_date'] = SharedDate::excelToDateTimeObject($array['birth_date'])->format('d/m/Y');
                } else {
                    Session::put('date_error',  1);
                }
            } catch (\Throwable $th) {
            }

            if(!empty($array['phone'])) {
                $customerList =  CustomerList::where('phone', $array['phone'])->first();
              //  $clientAcount =  ClientAccount::where('phone', $array['phone'])->first();
                $CustomerListBeforeSignup =  CustomerListBeforeRegister::where('phone', $array['phone'])->first();
                $phone = $array['phone'] ;
                if ( ! empty( $customerList )) {
                    $customErrorMessages['phone.unique'] =" The phone number is already in use by customer  $customerList->account_name phone:$phone " ;
                }elseif ( ! empty( $CustomerListBeforeSignup )  ) {
                    $customErrorMessages['phone.unique'] =" The phone number is already in use by another group phone:$phone " ;
                }

                // elseif (  ! empty( $clientAcount ) ) {
                //     $customErrorMessages['phone.unique'] =" The phone number is already in use by client  $clientAcount->account_name phone:$phone "  ;
                // }
            }


            $validator = Validator::make( $array, $validationRules ,  $customErrorMessages );
            DB::beginTransaction(); 
     
            /* $customer = ClientAccount::find($customer_list->client_account_id); */
           
            //code...
          
              
                if (!$validator->fails()) {

                   
                    $customer_list = CustomerListBeforeRegister::where('phone', $array['phone'])->where('customer_package_id',  $package->id )->first();
                 
 
                    if (!empty($customer_list) && !empty($customer_list->id)) {
                        $array['is_new'] = 0;
                        $array['has_changes'] = 0;
                        $array['old_account_name'] = null;
                        $array['old_first_name'] = null;
                        $array['old_last_name'] = null;
                        $array['old_phone'] = null;
                        $array['old_email'] = null;
                        $array['old_birth_date'] = null;
                        $array['old_gender'] = null;
                        $array['old_address'] = null;
                        $array['old_nationality_id'] = null;
                        $array['old_passport_id'] = null;
                        $array['old_max_sub_users'] = null;
                        $array['client_account_id'] = null;
                        

                        /* $array['service_name_en_percent_matching'] = ($matching_name_en_count /  count($excel_customer_list_array)) * 100; */
                        if ( !empty( $array['account_name'] ) &&  trim($array['account_name'])  != trim($customer_list->account_name)) {
                            $array['old_account_name'] =   $customer_list->account_name;
                            $array['has_changes'] = 1;
                        }

                        if (  !empty( $array['first_name'] ) &&  trim($array['first_name'])  != trim($customer_list->first_name)) {
                            $array['old_first_name'] =   $customer_list->first_name;
                            $array['has_changes'] = 1;
                        }
                             
                        if (  !empty( $array['max_sub_users'] ) &&  $array['max_sub_users'] != $customer_list->max_sub_users ) {
                            $array['old_max_sub_users'] =   $customer_list->max_sub_users;
                            $array['has_changes'] = 1;
                        }

                        if ( !empty( $array['last_name'] ) && trim($array['last_name'])  != trim($customer_list->last_name)) {
                            $array['old_last_name'] =   $customer_list->last_name;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['phone'] ) && trim($array['phone'])  != trim($customer_list->phone)) {
                            $array['old_phone'] =   $customer_list->phone;
                            $array['has_changes'] = 1;
                        }
                        
                        if ( !empty( $array['email'] ) && trim($array['email'])  != trim($customer_list->email)) {
                            $array['old_email'] =   $customer_list->email;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['address'] ) && trim($array['address'])  != trim($customer_list->address)) {
                            $array['old_address'] =   $customer_list->address;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['gender'] ) && trim($array['gender'])  != trim($customer_list->gender)) {
                            $array['old_gender'] =   $customer_list->gender;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['birth_date'] ) && trim($array['birth_date'])  != trim($customer_list->birth_date)) {
                            $array['old_birth_date'] =   $customer_list->birth_date;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['nationality_id'] ) && trim($array['nationality_id'])  != trim($customer_list->nationality_id)) {
                            $array['old_nationality_id'] =   $customer_list->nationality_id;
                            $array['has_changes'] = 1;
                        }
                        if ( !empty( $array['passport_id'] ) && trim($array['passport_id'])  != trim($customer_list->passport_id)) {
                            $array['old_passport_id'] =   $customer_list->passport_id;
                            $array['has_changes'] = 1;
                        }
                        // if ( !empty( $array['client_account_id'] ) && trim($array['client_account_id'])  != trim($customer_list->client_account_id)) {
                        //     $array['old_client_account_id'] =   $customer_list->client_account_id;
                        //     $array['has_changes'] = 1;
                        // }
                        
                    } else {
                        $array['is_new'] = 1;
                    }
                    
                    
                    DB::table('customer_lists_import')->insert($array);
                    
                } else {
                  
                    if (count($validator->errors()->all()) < 3 ) {
                        $fails_rows_array_with_errors[$number] =  $validator->errors()->all();
                        $invalid_data_array = [];
                        $invalid_data_array['row'] = json_encode($row->toArray());
                        $invalid_data_array['errors'] =  json_encode($validator->errors()->all());
                        $invalid_data_array['created_by'] = auth()->id() ?? 0;
                        DB::table('customer_lists_import_invalid_rows')->insert($invalid_data_array);
                    }
                }
               
                DB::commit();
            // } catch (\Throwable $th) {
            //    // DB::rollBack();
            //    dd( $th->getMessage() , $row , $index, $number);
            // }
            Session::put('fails_rows_array_with_errors',  $fails_rows_array_with_errors);
            //dd(    $row ,  $array  );
        }
    }
}