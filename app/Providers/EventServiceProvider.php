<?php

namespace App\Providers;

use App\Events\DeleteReviewEvent;
use App\Events\TestBrodcast;
use App\Events\TestBrodcastEvent;
use Illuminate\Support\Facades\Event;
use App\Listeners\TestBrodcastListner;
use Illuminate\Auth\Events\Registered;
use App\Events\SendForgotPasswordAdminEvent;
use App\Listeners\DeleteReviewListner;
use App\Listeners\ForgotPasswordAdminListner;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,

        ],
        SendForgotPasswordAdminEvent::class =>[
            ForgotPasswordAdminListner::class,
        ],
        TestBrodcastEvent::class =>[
            TestBrodcastListner::class,
        ],
        DeleteReviewEvent::class =>[
            DeleteReviewListner::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
