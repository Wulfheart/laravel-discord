<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

use Saloon\Contracts\Arrayable;

abstract class BaseType implements Arrayable
{
    public static function make(): static
    {
        return new static();
    }

    abstract public function toArray(): array;
}
