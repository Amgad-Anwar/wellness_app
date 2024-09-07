<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Benwilkins\FCM\FcmMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TypesOfCustomerNOtification extends Notification
{
   

    protected $notifcation;
    protected $language;
    public function __construct( $notifcation , $language )
    {
      $this->notifcation = $notifcation;
      $this->language = $language;
    }



    public function via($notifiable)
    {
        return ['fcm'];
    }

    public function toFcm($notifiable)
    {
        $message = new FcmMessage();
        $message->content([
            'title'        =>   $this->language == 'ar' ?  $this->notifcation->title_ar ?? " " : $this->notifcation->title ,
            'body'         => $this->language == 'ar' ?  ( $this->notifcation->message_arr ??  " " ) . "...type : " . $this->notifcation->type    :  $this->notifcation->message . "...type : " . $this->notifcation->type ,
            'sound'        => 'default', // Optional 
            'icon'         =>  $this->notifcation->img ?? " " , // Optional
            'click_action' => "FLUTTER_NOTIFICATION_CLICK"  , // Optional
        ])->data([
            'image' =>  $this->notifcation->img  ?? " " ,// Optional
            'type' => $this->notifcation->type  ?? " ", // Optional
            'data' => $this->notifcation->related_data  ?? " ", // Optional
        ])->priority(FcmMessage::PRIORITY_HIGH); // Optional - Default is 'normal'.

        return $message;
    }
}
