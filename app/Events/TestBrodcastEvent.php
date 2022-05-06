<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
// use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Broadcasting\PresenceChannel;
use App\Models\Admin;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Foundation\Events\Dispatchable;
 use Illuminate\Queue\SerializesModels;

class TestBrodcastEvent implements ShouldBroadcast
{
     use SerializesModels;

    public $admin;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Admin $admin)
    {
        $this->admin=$admin;
    }
    // In test events
     public function onQueue()
    {
    return 'test';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('test.'.$this->admin->id);
    }
}
