<?php

namespace App\Listeners;

use App\Models\YourModel; // Replace YourModel with the name of your model
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateTriggerEventListener
{
    public function handle($event , $data )
    {

        // dd(  $event , $data[0]->getDirty()  , auth()->id() );

        // // $model = $event->getModel();
        // $model = $event;
        // dd( $model  ) ;
        // $parts = explode(':', $model);

        // // Get the last part of the exploded array, which should be the class name
        // $className = trim(end($parts));

        // // Split the class name by "\" to get the namespace and class name parts
        // $classParts = explode('\\', $className);

        // // Get the last part of the exploded array, which should be the class name without the namespace
        // $classNameWithoutNamespace = end($classParts);
        // dd($model);

        // Log::info('Record updated: ' . $model . ' ID: ' . $model->id);

        // DB::table('provider_account_price_lists_import')->insert([
        //     'ip_address' => "1.1.1.1",
        //     'request' => 'Record updated: ' . get_class($model) . ' ID: ' . $model->id,
        //     'response_code' => '11111',
        // ]);
    }
}
