<?php

namespace App\Listeners;

use App\Notifications\NewPostPublished;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CallAdminOnCreatePost
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
        $users = User::admin()->get();
        $users->notify(new NewPostPublished($event->post));
    }
}
