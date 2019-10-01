<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\CreateLanguage;
use App\Repository\Fields\FieldsRepository;
class CreateFields
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreateLanguage $event)
    {
        return FieldsRepository::generateFieldsForLanguage($event->language);
    }

    public function subscribe($events) {
        $events->listen('App\Events\CreateLanguage', 'App\Listeners\CreateFields');
    }
}
