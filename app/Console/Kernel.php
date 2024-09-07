<?php

namespace App\Console;

use App\Console\Commands\SendNotifiCationsForCustomersCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        // \App\Console\Commands\SendNotifiCationsForCustomersCommand::class,
        // \App\Console\Commands\SubscriptionNearlyExpirationCommand::class,
        // \App\Console\Commands\SubscriptionExpirationCommand::class,
        // \App\Console\Commands\SendNotificationForStaffManagementCommand::class,
        // \App\Console\Commands\UpdateProviderPriceListExpirationDateCommand::class,
        // \App\Console\Commands\ProviderDynamicPayOffCommand::class,
        // \App\Console\Commands\ProviderAccountStatusCommand::class,
    ];

    
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        //$schedule->call(new SendNotifiCationsForCustomersCommand)->daily();

        // $schedule->command('ProviderAccountStatusCommand')->hourly();
        // $schedule->command('SendNotifiCationsForCustomersCommand')->everyMinute(); 
        // $schedule->command('SubscriptionNearlyExpirationCommand')->everyMinute(); 
        // $schedule->command('SubscriptionExpirationCommand')->everyMinute(); 
        // $schedule->command('SendNotificationForStaffManagementCommand')->everyMinute(); 
        // $schedule->command('UpdateProviderPriceListExpirationDateCommand')->dailyAt('0:00');
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
