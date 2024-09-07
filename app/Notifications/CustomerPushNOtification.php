<?php

namespace App\Notifications;

use Benwilkins\FCM\FcmMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class CustomerPushNOtification extends Notification
{

    protected $notifcation;
    public function __construct( $notifcation )
    {
      $this->notifcation = $notifcation;
    }

    public function via($notifiable)
    {
        return ['fcm'];
    }

    public function toFcm($notifiable)
    {
        $message = new FcmMessage();
        $message->content([
            'title'        => $this->notifcation->title ,
            'body'         => $this->notifcation->message,
            'sound'        => 'default', // Optional 
            'icon'         =>  $this->notifcation->img , // Optional
            'click_action' => $this->notifcation->img , // Optional
            'image' => $this->notifcation->img , // Optional
           
        ])->data([
            'param1' => 'baz' // Optional
        ])->priority(FcmMessage::PRIORITY_HIGH); // Optional - Default is 'normal'.

        return $message;
    }
}
