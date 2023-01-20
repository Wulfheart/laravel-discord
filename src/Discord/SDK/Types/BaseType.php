<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class BaseType
{
    public static function make(
    ): static {
        return new static();
    }
}
