<?php

namespace App\Listeners;

use App\Events\HelloWorldEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class HelloWorldListener
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
     * @param  \App\Events\HelloWorldEvent  $event
     * @return void
     */
    public function handle(HelloWorldEvent $event)
    {
        \Log::info('Hello, World! Listener triggered');
        dd('Listener triggered'); // Add this line for debugging
    }
}
