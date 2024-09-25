<?php

use App\Models\MedicineImages;
use App\Models\ProviderCreditTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Middleware\UserRoles;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\MedicineBasedUnitType;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CustomerDashboard\OtpController;
use App\Http\Controllers\CustomerDashboard\HomeController;
use App\Http\Controllers\Dashboard\notificationController;
use App\Http\Controllers\Dashboard\CPTCategoriesController;
use App\Http\Controllers\Dashboard\CustomerTypesController;
use App\Http\Controllers\CustomerDashboard\Api\ProvidersController;
use App\Http\Controllers\CustomerDashboard\Auth\PasswordController;
use App\Http\Controllers\CustomerDashboard\PaymobPaymentController;
use App\Http\Controllers\CustomerDashboard\CustomerAccountController;
use App\Http\Controllers\CustomerDashboard\Auth\NewPasswordController;
use App\Http\Controllers\CustomerDashboard\Auth\VerifyEmailController;
use App\Http\Controllers\Dashboard\ProviderAccountsPriceListsController;
use App\Http\Controllers\CustomerDashboard\Auth\RegisteredUserController;
use App\Http\Controllers\CustomerDashboard\Client\ClientAccountController;
use App\Http\Controllers\CustomerDashboard\Auth\PasswordResetLinkController;
use App\Http\Controllers\CustomerDashboard\Auth\ConfirmablePasswordController;

use App\Http\Controllers\ProviderDashboard\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CustomerDashboard\Auth\EmailVerificationPromptController;
use App\Http\Controllers\CustomerDashboard\Dashboard\Customer\CustomerFamilyController;
use App\Http\Controllers\CustomerDashboard\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\ProviderDashboard\API\CreditTransactionsController;
use App\Http\Controllers\ProviderDashboard\Auth\PasswordController as AuthPasswordController;
use App\Http\Controllers\ProviderDashboard\HomeController as ProviderDashboardHomeController;
use App\Http\Controllers\ProviderDashboard\Auth\NewPasswordController as AuthNewPasswordController;
use App\Http\Controllers\ProviderDashboard\Auth\VerifyEmailController as AuthVerifyEmailController;
use App\Http\Controllers\ProviderDashboard\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\ProviderDashboard\Auth\PasswordResetLinkController as AuthPasswordResetLinkController;
use App\Http\Controllers\ProviderDashboard\Auth\ConfirmablePasswordController as AuthConfirmablePasswordController;
use App\Http\Controllers\ProviderDashboard\Auth\AuthenticatedSessionController as AuthAuthenticatedSessionController;
use App\Http\Controllers\ProviderDashboard\Auth\EmailVerificationPromptController as AuthEmailVerificationPromptController;
use App\Models\City;
use App\Models\CustomerDashboard\Invoice;
use App\Models\Medicine;
use App\Models\MedicinePrice;
use App\Models\ProviderAccount;
use App\Models\ProviderAccountsPriceList;
use App\Models\ProviderBranch;
use App\Models\State;
use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Ripcord\Ripcord;

//Clear Cache facade value:



Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

Route::get('/optimize-clear', function () {
    $exitCode = Artisan::call('optimize:clear');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

//Clear Config cache:
Route::get('/config-clear', function () {
    $exitCode = Artisan::call('config:clear');
    return '<h1>Clear Config cleared</h1>';
});



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['middleware' => 'HttpsProtocol'], function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
        return view('welcome');
    });
    
    Auth::routes();
    Route::group(['prefix' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::setLocale()], function () {
        Route::get('/dashboard', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('dashboard');
        Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'UserRoles']], function () {
            /*start roles routes*/
            Route::group(['prefix' => 'roles'], function () {
                Route::get('/roles.rolePermissions', [\App\Http\Controllers\Dashboard\RolesController::class, 'rolePermissions'])->name('roles.rolePermissions');
                Route::resource('/', \App\Http\Controllers\Dashboard\RolesController::class)->names([
                    'index' => 'roles.index',
                    'create' => 'roles.create',
                    'store' => 'roles.store',
                    'update' => 'roles.update',
                    'edit' => 'roles.edit',
                    'destroy' => 'roles.destroy',
                    'show' => 'roles.show'
                ])->parameter('', 'role');
            });
            /*end roles routes*/
            /*start users routes*/
            Route::group(['prefix' => 'users'], function () {
                Route::post('/roles/rolesPermissions', [\App\Http\Controllers\Dashboard\UsersController::class, 'rolesPermissions'])->name('roles.rolesPermissions');
                Route::get('/profile', [\App\Http\Controllers\Dashboard\UsersController::class, 'profile'])->name('users.profile');
                Route::put('/profile', [\App\Http\Controllers\Dashboard\UsersController::class, 'profileUpdate'])->name('users.profile_update');
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\UsersController::class, 'deleteMulti'])->name('users.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\UsersController::class, 'export'])->name('users.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\UsersController::class)->names([
                    'index' => 'users.index',
                    'create' => 'users.create',
                    'store' => 'users.store',
                    'update' => 'users.update',
                    'edit' => 'users.edit',
                    'destroy' => 'users.destroy',
                    'show' => 'users.show',
                ])->parameter('', 'user');
            });
            /*end users routes*/
   
 
            /*end countries routes*/
            /*start cities routes*/
            Route::group(['prefix' => 'cities'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\CitiesController::class, 'deleteMulti'])->name('cities.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\CitiesController::class, 'export'])->name('cities.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\CitiesController::class)->names([
                    'index' => 'cities.index',
                    'create' => 'cities.create',
                    'store' => 'cities.store',
                    'update' => 'cities.update',
                    'edit' => 'cities.edit',
                    'destroy' => 'cities.destroy',
                    'show' => 'cities.show',
                ])->parameter('', 'city');
            });
            /*end cities routes*/
            /*start states routes*/
            Route::group(['prefix' => 'states'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\StatesController::class, 'deleteMulti'])->name('states.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\StatesController::class, 'export'])->name('states.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\StatesController::class)->names([
                    'index' => 'states.index',
                    'create' => 'states.create',
                    'store' => 'states.store',
                    'update' => 'states.update',
                    'edit' => 'states.edit',
                    'destroy' => 'states.destroy',
                    'show' => 'states.show',
                ])->parameter('', 'state');
            });
            /*end states routes*/

            Route::group(['prefix' => 'meals'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\MealsController::class, 'deleteMulti'])->name('meals.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\MealsController::class, 'export'])->name('meals.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\MealsController::class)->names([
                    'index' => 'meals.index',
                    'create' => 'meals.create',
                    'store' => 'meals.store',
                    'update' => 'meals.update',
                    'edit' => 'meals.edit',
                    'destroy' => 'meals.destroy',
                    'show' => 'meals.show',
                ])->parameter('', 'meal');
            });



 
            Route::group(['prefix' => 'tutorial_category'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\TutorialCategoryController::class, 'deleteMulti'])->name('tutorial_category.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\TutorialCategoryController::class, 'export'])->name('tutorial_category.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\TutorialCategoryController::class)->names([
                    'index' => 'tutorial_category.index',
                    'create' => 'tutorial_category.create',
                    'store' => 'tutorial_category.store',
                    'update' => 'tutorial_category.update',
                    'edit' => 'tutorial_category.edit',
                    'destroy' => 'tutorial_category.destroy',
                    'show' => 'tutorial_category.show',
                ])->parameter('', 'tutorial_category');
            });
            /*end tutorial_category routes*/

            /*start customer_packages routes*/
            Route::group(['prefix' => 'customer_packages'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\CustomerPackagesController::class, 'deleteMulti'])->name('customer_packages.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\CustomerPackagesController::class, 'export'])->name('customer_packages.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\CustomerPackagesController::class)->names([
                    'index' => 'customer_packages.index',
                    'create' => 'customer_packages.create',
                    'store' => 'customer_packages.store',
                    'update' => 'customer_packages.update',
                    'edit' => 'customer_packages.edit',
                    'destroy' => 'customer_packages.destroy',
                    'show' => 'customer_packages.show',
                ])->parameter('', 'customer_package');
            });
            /*end customer_packages routes*/

 
            /*start customer_lists routes*/
            Route::group(['prefix' => 'customer_lists'], function () {
                Route::post('/import', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'import'])->name('customer_lists.import');
                Route::any('/import/match_columns', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'matchColumns'])->name('customer_lists.import_match_columns');
                Route::get('/import/group_packages', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'groupsPackages'])->name('customer_lists.groups_packages');
                Route::get('/import/groups_pending_users', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'groupsPackagesUsers'])->name('customer_lists.groups_pending_users');
                Route::delete('/delete/groups_pending_users/{package_id}', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'deleteGroupsPackagesUsers'])->name('customer_lists.delete.groups_pending_users');
                Route::any('/import/match_columns_update', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'matchColumnsUpdate'])->name('customer_lists.import_match_columns_update');
                Route::get('/import/getdata', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'getImportedData'])->name('customers_lists.getImportedData');
                Route::get('/import/check/progress', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'checkProgress'])->name('customer_lists.checkprogress');
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'deleteMulti'])->name('customer_lists.multi_destroy');
                Route::post('/export', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'export'])->name('customer_lists.export');
                Route::post('/credit/add/{id}', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'addToCredit'])->name('customer_lists.credit.add');
                Route::post('/getAccountData', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'getAccountTypeAndPackage'])->name('customer_list.getAccountTypeAndPackage');
                Route::get('/insert/new_users', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'insertNewUsers'])->name('customer_list.insert.data');
                Route::get('/update/users', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'UpdateDublicatedUsers'])->name('customer_list.update.data');
                Route::get('/export/invalid_data', [\App\Http\Controllers\Dashboard\CustomerlistsController::class, 'exportInvalidData'])->name('customer_lists.export_invalid_rows');
                Route::resource('/', \App\Http\Controllers\Dashboard\CustomerlistsController::class)->names([
                    'index' => 'customer_lists.index',
                    'create' => 'customer_lists.create',
                    'store' => 'customer_lists.store',
                    'update' => 'customer_lists.update',
                    'edit' => 'customer_lists.edit',
                    'destroy' => 'customer_lists.destroy',
                    'show' => 'customer_lists.show',
                ])->parameter('', 'customer_list');
            });
            /*end customer_lists routes*/
        
   


         

            /*start effective_materials routes*/
            Route::group(['prefix' => 'subscription_transaction'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\SubscriptionTransactionController::class, 'deleteMulti'])->name('subscription_transaction.multi_destroy');
                Route::post('/get/services', [\App\Http\Controllers\Dashboard\SubscriptionTransactionController::class, 'getPackages'])->name('subscription_transaction.get.packages');
                Route::get('/payment-details/{id}', [\App\Http\Controllers\Dashboard\SubscriptionTransactionController::class, 'paymentTransactionDetails'])->name('subscription_transaction.payment_details');
                Route::post('/export', [\App\Http\Controllers\Dashboard\SubscriptionTransactionController::class, 'export'])->name('subscription_transaction.export');
                Route::resource('/', \App\Http\Controllers\Dashboard\SubscriptionTransactionController::class)->names([
                    'index' => 'subscription_transaction.index',
                    'create' => 'subscription_transaction.create',
                    'store' => 'subscription_transaction.store',
                    'update' => 'subscription_transaction.update',
                    'edit' => 'subscription_transaction.edit',
                    'destroy' => 'subscription_transaction.destroy',
                    'show' => 'subscription_transaction.show',
                ])->parameter('', 'subscription_transaction');
            });
            /*end subscription_transaction routes*/


     
            /*start medicines routes*/
            Route::group(['prefix' => 'medicines'], function () {
                Route::delete('/delete-multi', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'deleteMulti'])->name('medicines.multi_destroy');
                Route::post('/export/full-duplicate', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'exportFullDuplicate'])->name('medicines.export.full-duplicate');
                Route::post('/export/with-some-changes', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'exportWithSomeChanges'])->name('medicines.export.with-some-changes');
                Route::post('/export/new-data', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'exportNewData'])->name('medicines.export.new-data');
                Route::post('/export', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'export'])->name('medicines.export');
                Route::post('/change/cat', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'changeCat'])->name('medicines.changecat');
                Route::post('/change/cat/active', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'changeCatAndActive'])->name('medicines.change.cat.active');
                Route::post('/import', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'import'])->name('medicines.import');
                Route::get('/import/match_columns', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'matchColumns'])->name('medicines.import_match_columns');

                Route::post('/import/match_columns', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'matchColumnsUpdate'])->name('medicines.import_match_columns_update');
                Route::get('/import/getdata', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'getImportedData'])->name('medicines.getImportedData');
                Route::get('/import/check/progress', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'checkProgress'])->name('medicines.checkprogress');
                Route::get('/excel/export_invalid_rows', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'exportInvalidRows'])->name('medicines.export_invalid_rows');
                Route::post('/update/full-duplicate', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'updateFullDuplicate'])->name('medicines.updatefullduplicate');
                Route::post('/update/with-some-changes', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'updateWithSomeChanges'])->name('medicines.updatewithsomechanges');
                Route::post('/insert/new-data', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'insertNewData'])->name('medicines.insertnewdata');
                Route::get('/get/icd10', [\App\Http\Controllers\Dashboard\MedicinesController::class, 'getIcd10'])->name('medicines.get.icd10');


                Route::resource('/', \App\Http\Controllers\Dashboard\MedicinesController::class)->names([
                    'index' => 'medicines.index',
                    'create' => 'medicines.create',
                    'store' => 'medicines.store',
                    'update' => 'medicines.update',
                    'edit' => 'medicines.edit',
                    'destroy' => 'medicines.destroy',
                    'show' => 'medicines.show',
                ])->parameter('', 'medicine');
            });
            /*end medicines routes*/
           

         
        });
    });
});

