<?php

namespace App\Messages;

class SmsNotification
{
    public function __construct(
        private string $content,
        private string $from,
        private string $to,
    ){}

    public function getContent(): string
    {
        return $this->content;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }
}
