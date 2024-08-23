<?php

namespace App\Messages;

class EmailNotification
{
    public function __construct(
        private string $title,
        private string $content,
        private string $from,
        private string $to,
        private array $attachments = []
    ){}

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
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
