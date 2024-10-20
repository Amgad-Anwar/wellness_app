<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CityResource;
use App\Http\Resources\StatesResource;
use App\Models\Customer;
use App\Models\OtpCheck;
use App\Traits\OdooAccountingCustomersTrait;
use Carbon\Carbon;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer\CustomerList;
use App\Models\Customer\CustomerType;
use App\Http\Resources\CustomerResource;
use App\Models\Customer\CustomerPackage;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Response;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\Customer\CustomerListsBeforeSignup;
use App\Models\Customer\SubscriptionTransaction;

class AuthenticationController extends Controller
{

    use OdooAccountingCustomersTrait;
    public function register(Request $request)
    {
        $fields = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
              //  Rule::unique('discountcard_customer_lists', 'email')->whereNull('deleted_at')
            ],
            'password' => 'required|string|min:8|confirmed',
            'phone' => [
                'required',
                'string',
                Rule::unique('customers', 'phone')->whereNull('deleted_at')
            ],
            'delivery_address_type' => 'required|in:home,office,building',
            'handle_delivery_type' => 'required|in:drop_at_door,ring_the_bell,call_you',

            'state_id' => ['required', Rule::exists(State::class, 'id')],
            'city_id' => ['required', Rule::exists(City::class, 'id')],
            'device_name' => 'required',
            'otp_code' => 'required',
            //'birth_date' => 'nullable|date',
            //'customer_package_id' => ['nullable', 'sometimes', Rule::exists(CustomerPackage::class, 'id')],
        ]);

        $OtpCheck = OtpCheck::where('phone', $request->phone)
            ->where('otp_code', $request->otp_code)
            ->where('expire_date', '>', Carbon::now())
            ->orderBy('id', 'desc')
            ->first();

        if ( $OtpCheck  ) {

            $customer = Customer::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Encrypt the password
                'phone' => $request->phone,
                'delivery_address_type' => $request->delivery_address_type,
                'handle_delivery_type' => $request->handle_delivery_type,
                'street' => $request->street,
                'avenue' => $request->avenue,
                'block' => $request->block,
                'home_number' => $request->home_number,
                'building_number' => $request->building_number,
                'floor' => $request->floor,
                'office_number' => $request->office_number,
                'apartment_number' => $request->apartment_number,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
            ]);
            
            $OtpCheck->verified_at = Carbon::now() ; 
            $OtpCheck->save() ; 

        }else {
            return response()->json([
                'success'=> false ,
                'msg'=> 'not verified',
                'token' => "",
                'customer' => [],
            ], 200) ;
        }

        $device_name = $request->post('device_name', $request->userAgent());
        $token = $customer->createToken($device_name)->plainTextToken;

        // try {
        //     $customer->odoo_id =  $this->createOdooCustomer($customer) ?? 0;
        // } catch (\Throwable $th) {
        //     $customer->odoo_id = 0;
        // }
        //$customer->save();
        return response()->json([
            'success'=> true ,
            'token' => $token,
            'customer' => new CustomerResource($customer),
        ] , 200) ;
    }

    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required|string',
            'device_name' => 'required'
        ]);

        $customer = Customer::where('phone', $request->phone)->first();

        if (!$customer) {
            return response()->json([
                'success' => false,
                'msg' => 'User Not found'
            ], 200);
        }
  
        if ($customer && Hash::check($request->password, $customer->password)) {
            $customer->tokens()->delete();
            $customer->fcm_token = $request->fcm_token ?? '';
            $customer->save();
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $customer->createToken($device_name)->plainTextToken;
            return response()->json([
                'success' => true,
                'msg' => 'User Found',
                'token' => $token,
                'customer' => new CustomerResource($customer),
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'invalid Phone Or Password',
            ], 200);
        }
    }

  
    public function checkRegisterationData(Request $request)
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
            'phone' => [
                'nullable',
                'string',
                Rule::unique('customers', 'phone')->whereNull('deleted_at')
            ],
            'delivery_address_type' => 'nullable|in:home,office,building',
            'handle_delivery_type' => 'nullable|in:drop_at_door,ring_the_bell,call_you',

            'state_id' => ['nullable', Rule::exists(State::class, 'id')],
            'city_id' => ['nullable', Rule::exists(City::class, 'id')],
            'device_name' => 'nullable',
            //'otp_code' => 'required',
            //'birth_date' => 'nullable|date',
           // 'customer_package_id' => ['nullable', 'sometimes', Rule::exists(CustomerPackage::class, 'id')],
        ]);

        return response()->json([
            'success' => true,
            'msg' => 'data Validated',
        ], 200);
       
    }

   
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required'
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

    public function changePassword(Request $request)
    {
        $request->validate([
            'phone' => ['required', Rule::exists(Customer::class, 'phone')] ,
            'otp_code' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $OtpCheck = OtpCheck::where('phone', $request->phone)
            ->where('otp_code', $request->otp_code)
            ->where('expire_date', '>', Carbon::now())
            ->orderBy('id', 'desc')
            ->first();

        if ( $OtpCheck  ) { 
          $customer =  Customer::where('phone' , $request->phone )->first() ;
          if($customer){
            $customer->password = $request->password ;
            $customer->save() ;

            $OtpCheck->verified_at = Carbon::now() ;               
            $OtpCheck->save() ;     

            return response()->json([
                'success' => true,
                'msg' => 'success'
            ], 200);
          }
          
        }

        return response()->json([
            'success' => false,
            'msg' => 'invalid otp'
        ], 200);

    }


    public function checkOtp(Request $request)
    {
        $request->validate([
            'phone' => ['required'] ,
            'otp_code' => 'required',
        ]);
        
        $OtpCheck = OtpCheck::where('phone', $request->phone)
            ->where('otp_code', $request->otp_code)
            ->where('expire_date', '>', Carbon::now())
            ->orderBy('id', 'desc')
            ->first();

        if ( $OtpCheck  ) { 
            return response()->json([
                'success' => true,
                'msg' => 'success'
            ], 200);
        }

        return response()->json([
            'success' => false,
            'msg' => 'invalid otp'
        ], 200);

    }

    public function logout()
    {
        $customer = Auth::guard('customer')->user();
        $customer->currentAccessToken()->delete();
        $customer->fcm_token = null;
        $customer->save();
        return response()->json([
            'success' => true,
        ], 200);
    }


    public function getStates()
    {
        $states = State::all();
        return response()->json([
            'success'=>true,
            'result'=>StatesResource::collection($states)
        ]);
    }

    public function getCities( $state_id )
    {
        $cities = City::where('state_id', $state_id )->get();
        return response()->json([
            'success'=>true,
            'result'=>CityResource::collection($cities)
        ]);
    }

}
