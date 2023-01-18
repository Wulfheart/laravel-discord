<?php

namespace Wulfheart\LaravelDiscord\Discord\Message;

class Message
{
    protected function __construct(
        protected string $content,
    )
    {
    }
    public static function create(string $content): Message
    {
        return new self($content);
    }

    public function toMessageData(): array
    {
        return [
            'content' => $this->content,
        ];
    }

}
