<?php

namespace App\Listeners;

use App\Notifications\TelegramPublishPost;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PublishNewPost
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
        // Peyman
        $user = User::find(1);
        $user->notify(new TelegramPublishPost($event->post));
    }
}
