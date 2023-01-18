<?php

namespace Wulfheart\LaravelDiscord\Discord\Message;

use Wulfheart\LaravelDiscord\Discord\Message\Builder\EmbedBuilder;

class Message
{

    protected EmbedBuilder $embeds;
    protected function __construct(
        protected ?string $content,
    )
    {
    }

    public static function create(?string $content = null): Message
    {
        return new self($content);
    }

    public function embeds(EmbedBuilder $embeds): Message {
        $this->embeds = $embeds;
        return $this;
    }

    public function toMessageData(): array
    {
        return [
            'content' => $this->content ?? '',
            'embeds' => $this->embeds->toArray(),
        ];
    }

}
