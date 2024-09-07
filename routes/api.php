<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/register', [AuthenticationController::class, 'register'])->middleware('guest:customer');
Route::post('auth/register_check', [AuthenticationController::class, 'checkRegisterationData'])->middleware('guest:customer');
Route::post('auth/login', [AuthenticationController::class, 'login'])->middleware('guest:customer');

Route::post('auth/send_otp', [AuthenticationController::class, 'sendOtp']);    
Route::post('auth/check_otp', [AuthenticationController::class, 'checkOtp']);  

Route::post('/auth/forget/change_password', [AuthenticationController::class, 'changePassword']);  

Route::get('get/states', [AuthenticationController::class, 'getStates']);     
Route::get('get/cities/{state_id}', [AuthenticationController::class, 'getCities']);     


Route::group([
    'middleware' => 'auth:customer',
], function () {

   

    Route::group([
        'prefix' => 'customer',
    ], function () {

        Route::post('/edit_profile', [CustomerController::class, 'editProfile']);  
        Route::post('/send_otp_to_change_phone', [CustomerController::class, 'sendOtpForChangePhone']);  
        Route::post('/change_phone', [CustomerController::class, 'changePhone']);  




    });

   
  Route::post('auth/logout', [AuthenticationController::class, 'logout']);


}) ;

