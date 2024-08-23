<?php

namespace App\Handlers;

use App\Messages\EmailNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class EmailNotificationHandler
{
    public function __invoke(EmailNotification $message)
    {
        dd('We are here!');
    }
}
