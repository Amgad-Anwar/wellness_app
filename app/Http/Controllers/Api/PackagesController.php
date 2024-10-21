<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PackagesResource;
use App\Models\OtpCheck;

use App\Models\Package;
use Carbon\Carbon;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

use App\Http\Resources\CustomerResource;


class PackagesController extends Controller
{

    public function getPackages(Request $request)
    {
      $packages = Package::with('package_prices')->get();

      return response()->json([
        'success'=> true ,
        'result' => PackagesResource::collection($packages) ,
        ] , 200) ;
      


    }


}
