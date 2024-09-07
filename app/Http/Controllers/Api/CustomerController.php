<?php

namespace App\Http\Controllers\Api;

use App\Models\OtpCheck;

use Carbon\Carbon;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

use App\Http\Resources\CustomerResource;


class CustomerController extends Controller
{


    public function editProfile(Request $request)
    {
        $fields = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => [
                'nullable',
                'email',
              //  Rule::unique('discountcard_customer_lists', 'email')->whereNull('deleted_at')
            ],

            'password' => 'nullable|string|min:8|confirmed',

            'delivery_address_type' => 'nullable|in:home,office,building',
            'handle_delivery_type' => 'nullable|in:drop_at_door,ring_the_bell,call_you',

            'state_id' => ['nullable', Rule::exists(State::class, 'id')],
            'city_id' => ['nullable', Rule::exists(City::class, 'id')],

          
        ]);
        
        if (!empty($request->phone)) {

            return response()->json([
                'success' => false,
                'msg' => "can't update phone",
            ], 200);

        }

        
          $customer =  auth('customer')->user() ;
          $customer->update($request->input());


            return response()->json([
                'success' => true,
                'msg' => 'updated successfully',
                'customer' => new CustomerResource($customer),
            ], 200);

    }

    public function sendOtpForChangePhone(Request $request)
    {
        $request->validate([
            'phone' => [
                'required',
                'string',
                Rule::unique('customers', 'phone')->whereNull('deleted_at')
            ],
        ]);
        $currentDateTime = Carbon::now();

        $OtpCheck = OtpCheck::create([
            'phone' => $request->phone,
            'otp_code' => "0000", // mt_rand(1000, 9999) 
            'expire_date' => $currentDateTime->addMinutes(10),
        ]);
        $phone = $OtpCheck->phone;
        $otp_code = $OtpCheck->otp_code;


       $response = sendSMS( $otp_code , $phone );
        if($response){
            return response()->json([
                'success' => true,
                'msg' => 'success'
            ], 200);
        }
        return response()->json([
            'success' => false,
            'msg' => 'error'
        ], 200);

    }

    public function changePhone(Request $request)
    {
        $request->validate([
            'phone' => [
                'required',
                'string',
                Rule::unique('customers', 'phone')->whereNull('deleted_at')
            ],
            'otp_code' => 'required'
        ]);
        
        $OtpCheck = OtpCheck::where('phone', $request->phone)
        ->where('otp_code', $request->otp_code)
        ->where('expire_date', '>', Carbon::now())
        ->orderBy('id', 'desc')
        ->first();

        if ( $OtpCheck  ) { 
            $customer =  auth('customer')->user() ;
            $customer->phone = $request->phone ;
            $customer->save();

            $OtpCheck->verified_at = Carbon::now() ; 
            $OtpCheck->save() ;

            return response()->json([
                'success' => true,
                'msg' => 'updated successfully',
                'customer' => new CustomerResource($customer),
            ], 200);
        }

        return response()->json([
            'success' => false,
            'msg' => 'invalid otp',
        ], 200);


   

    }

}
