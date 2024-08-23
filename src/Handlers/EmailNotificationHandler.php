<?php

namespace App\Handlers;

use App\Messages\EmailNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class EmailNotificationHandler
{
    public function __invoke(EmailNotification $message)
    {
        print_r("Sending Email to {$message->getTo()} from {$message->getFrom()} with content: {$message->getContent()}" . PHP_EOL);
    }
}
