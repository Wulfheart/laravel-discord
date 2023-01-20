<?php

declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message;

use Illuminate\Contracts\Support\Arrayable;
use Wulfheart\LaravelDiscord\Discord\Message\Traits\FiltersRecursive;

abstract class SupportObject implements Arrayable
{
    use FiltersRecursive;

    public function toArray(): array
    {
        return $this->arrayFilterRecursive([]);
    }
}
