<?php

namespace App\Mail;

use App\Models\CustomerDashboard\Customer\SubscriptionTransaction;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $subscription = SubscriptionTransaction::where('customer_list_id' , $this->user->id )
            ->where('status' , 'success')
            ->where( 'start_date' , '<=' , Carbon::now()->toDateString() )
            ->where( 'end_date' , '>' , Carbon::now()->toDateString() )
            ->first();

        return $this->view('mails.subscription_invoice')
                    ->with([
                        'user' => $this->user,
                        'subscription' => $subscription,
                    ]);
    }

}
