<?php

namespace App\Listeners;

use App\Models\Car;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\AutoSaving as AutoSavingEvent;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;


class AutoSaving
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param AutoSavingEvent $event
     * @return void
     */
    public function handle(AutoSavingEvent $event)
    {
        $pin_code =  rand(111111, 999999);
         $event->car->update(['pin_code' => $pin_code]);

        $data = [
            'id'        => $event->car->id,
            'pin_code'  => $event->car->pin_code,
            'name'      => $event->car->name,
            'car'       => $event->car
        ];

        Mail::send('mail.initial', $data, function($message) use ($event) {
            $message->to($event->car->email, $event->car->name)->subject
            ('Sizin '.$event->car->id.' nömrəli elanınız yoxlanılır');
            $message->from('najafzadecom@yandex.com', ucfirst(get_setting('site_title')));
        });
    }
}
