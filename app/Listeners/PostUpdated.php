<?php

namespace App\Listeners;

use App\Notifications\PublishedPostUpdated;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostUpdated
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
    public function handle($event)
    {
        $admins = User::admin()->get();
        $admins->each->notify(new PublishedPostUpdated($event->post));
    }
}
