<?php

namespace App\Observers;

use App\Models\ProviderAccount;

class ProviderAccountObserver
{
    /**
     * Handle the ProviderAccount "created" event.
     *
     * @param  \App\Models\ProviderAccount  $providerAccount
     * @return void
     */
    public function created(ProviderAccount $providerAccount)
    {
        $providerAccount->unique_name = $providerAccount->id . '.' . ProviderAccount::createSlug($providerAccount->provider_account_name_en) . '.' . random_int(100000, 999999); //sprintf("%06d", mt_rand(1, 999999))
        $providerAccount->save();
    }

    /**
     * Handle the ProviderAccount "updated" event.
     *
     * @param  \App\Models\ProviderAccount  $providerAccount
     * @return void
     */
    public function updated(ProviderAccount $providerAccount)
    {
        //
    }

    /**
     * Handle the ProviderAccount "deleted" event.
     *
     * @param  \App\Models\ProviderAccount  $providerAccount
     * @return void
     */
    public function deleted(ProviderAccount $providerAccount)
    {
        //
    }

    /**
     * Handle the ProviderAccount "restored" event.
     *
     * @param  \App\Models\ProviderAccount  $providerAccount
     * @return void
     */
    public function restored(ProviderAccount $providerAccount)
    {
        //
    }

    /**
     * Handle the ProviderAccount "force deleted" event.
     *
     * @param  \App\Models\ProviderAccount  $providerAccount
     * @return void
     */
    public function forceDeleted(ProviderAccount $providerAccount)
    {
        //
    }
}
