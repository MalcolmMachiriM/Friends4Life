<?php

namespace App\Listeners;

use Illuminate\Mail\Events\MessageSent;
use Illuminate\Support\Facades\Log;

class LogSentMessage
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Mail\Events\MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        // Log the email details
        Log::info('Email sent', [
            'to' => $event->message->getTo(),
            'subject' => $event->message->getSubject(),
            'body' => $event->message->getBody(),
        ]);
    }
}
