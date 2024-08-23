<?php

namespace App\Handlers;

use App\Messages\SmsNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class SmsNotificationHandler
{
    public function __invoke(SmsNotification $message)
    {
        print_r("Sending SMS to {$message->getTo()} from {$message->getFrom()} with content: {$message->getContent()}" . PHP_EOL);
    }
}
