<?php

namespace App\Jobs;

use App\Models\CustomerList;
use App\Models\CustomerNotification;
use App\Models\notification;
use App\Models\ProviderBranch;
use App\Models\ProviderStaffManagement;
use App\Models\StaffmanagementNotification;
use App\Notifications\CustomerPushNOtification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class SendCustomerNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    
    public function __construct($f= null)
    {
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        if(!empty( request()->all_customers ) && request()->all_customers == "1" ){
            $customers= CustomerList::all();
        }elseif (!empty(   request()->customers  )  ){
            $customers= CustomerList::whereIn('id' ,request()->customers )->get();
        }
        $imgPath=null ;
        if( !empty( request()->img ) ){
            $hashedName = request()->img->hashName();
            $imgPath = Storage::disk('uploads')->putFileAs('notifications', request()->img, $hashedName);
            $imgPath =  env("APP_URL") . "uploads" . $imgPath ;
        }

        if ( !empty(  $customers) ) {
            $customersData = [];
            foreach ($customers as $customer) {
                $customersData[] = [
                    'customer_list_id' => $customer->id ,
                    'related_data' => json_encode(['id' => $customer->id ]),
                    'type' => 'general',
                    'title' =>  request()->title,
                    'title_ar' =>  request()->title_ar,
                    'message' =>  request()->message ,
                    'message_ar' =>  request()->message_ar,
                    'img' =>  $imgPath  ,
                    "created_from"=>"admin" ,
                    'created_at' => now(),
                    'updated_at' => now(),
                    
                ];
            }
    
            CustomerNotification::insert($customersData);
        }
       



        if(!empty( request()->all_providers ) && request()->all_providers == "1" ){
            $branches= ProviderBranch::with('staffs')->get();
        }elseif (!empty(   request()->providers  )  ) {
            $branches= ProviderBranch::with('staffs')->whereIn('id' ,request()->providers )->get();
        }

       // $branches= ProviderBranch::with('staffs')->where('id' ,  46103)->get();

       if( !empty(  $branches ) ){
        $branchesData = [];
        foreach ($branches as $branch) {
         foreach ($branch->staffs as $key => $staff) {
            $branchesData[] = [
                'staffmanagement_id' => $staff->id ,
                'related_data' => json_encode(['id' => $staff->id ]),
                'type' => 'general',
                'title' =>  request()->title,
                'title_ar' =>  request()->title_ar,
                'message' =>  request()->message ,
                'message_ar' =>  request()->message_ar,
                'img' =>  $imgPath  ,
                "created_from"=>"admin" ,
                'created_at' => now(),
                'updated_at' => now(),
                
            ];
         }
        }
 
        StaffmanagementNotification::insert($branchesData);
       }
 

       
    }
}
