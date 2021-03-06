<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\NewPostCreated' => [
            'App\Listeners\CallAdminOnCreatePost',
            'App\Listeners\PublishNewPost',
        ],

        'App\Events\PostDeleted' => [
            'App\Listeners\ListenPostDeleted'
        ],

        'App\Events\PostUpdated' => [
            'App\Listeners\PostUpdated'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
