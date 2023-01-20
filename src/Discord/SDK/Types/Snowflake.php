<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class Snowflake
{
    public function __construct(
        public string $content,
    ) {
    }

    public static function make(string $content): self
    {
        return new self($content);
    }
}
