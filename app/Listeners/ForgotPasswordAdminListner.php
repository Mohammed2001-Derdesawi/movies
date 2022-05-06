<?php

namespace App\Listeners;

use App\Events\SendForgotPasswordAdminEvent;
use App\Jobs\ForgotPasswordAdminJob;
use App\Models\Admin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPasswordAdminListner
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
     * @param  object  $event
     * @return void
     */
    public function handle(SendForgotPasswordAdminEvent $event)
    {
         return dispatch(new ForgotPasswordAdminJob($event));
    }
}
