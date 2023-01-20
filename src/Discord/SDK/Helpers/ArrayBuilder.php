<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Helpers;

use Saloon\Contracts\Arrayable;

class ArrayBuilder implements Arrayable
{
    protected array $data = [];

    public static function make(): self
    {
        return new self();
    }

    public function conditional(mixed &$value, string $as): self
    {
        if (isset($value)) {
            $this->data[$as] = $value;
        }
        return $this;
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
