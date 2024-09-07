<?php

namespace App\Jobs;

use App\Models\CustomerList;
use App\Models\CustomerNotification;
use App\Notifications\TypesOfCustomerNOtification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class NewBrancheCustomerNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $lat;
    protected $lng;
    protected $distance;
    protected $provider_branch;
    public function __construct($lat, $lng, $distance, $provider_branch)
    {
        $this->lat = $lat;
        $this->lng = $lng;
        $this->distance = $distance;
        $this->provider_branch = $provider_branch;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $customers = CustomerList::select(
            "discountcard_customer_lists.*",
            DB::raw("6371 * acos(cos(radians(?))
                * cos(radians(discountcard_customer_lists.location_lat))
                * cos(radians(discountcard_customer_lists.location_lng) - radians(?))
                + sin(radians(?))
                * sin(radians(discountcard_customer_lists.location_lat))) AS distance")
        )
            ->having('distance', '<=', $this->distance)
            ->orderBy('distance')
            ->addBinding($this->lat, 'select')
            ->addBinding($this->lng, 'select')
            ->addBinding($this->lat, 'select')
            ->get();


        $customersData = [];

        foreach ($customers as $customer) {
            $customersData[] = [
                'customer_list_id' => $customer->id,
                'related_data' => json_encode(['id' => $this->provider_branch->id]),
                'type' => 'new_branch',
                'title' => 'Carelite',
                'title_ar' => 'Carelite',
                'message' => 'New Branch is here! ' . $this->provider_branch->provider_name_en ,
                'message_ar' => 'فرع جديد' . $this->provider_branch->provider_name_ar,
                'created_at' => now(),
                'updated_at' => now(),
                
            ];
        }

        CustomerNotification::insert($customersData);

        // $subQuery = DB::table('discountcard_customer_lists')
        //     ->whereIn('id', $customers)
        //     ->select(
        //         'id',
        //         DB::raw('?  as related_data'),
        //         DB::raw('? as type'),
        //         DB::raw('? as title'),
        //         DB::raw('? as title_ar'),
        //         DB::raw('? as message'),
        //         DB::raw('? as message_ar'),
        //         DB::raw( 'now()')
        //     );


        // $query = "INSERT INTO customer_notifications (customer_list_id, related_data, type, title, title_ar, message,message_ar, created_at)
        //   " . $subQuery->toSql();

        // $bindings = [
        //     $related_data,
        //     'new_branch',
        //     'New Branch',
        //     'فرع جديد',
        //     'New Branch Message',
        //     'New Branch Message',
        // ];

        // DB::insert($query, array_merge($subQuery->getBindings(), $bindings));



        //dd( $customers );

        // foreach ($customers as $customer) {
        //     $notifcation = CustomerNotification::create([
        //         'customer_list_id' => $customer->id,
        //         'related_data' => json_encode(['id' =>  $this->provider_branch->id]),
        //         'type' => 'new_branch',
        //         'title' => "New Branch",
        //         'message' => "New Branch Message",

        //     ]);
        //     $customer->notify(new TypesOfCustomerNOtification($notifcation));
        // }
    }
}
