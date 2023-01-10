<?php

namespace Wulfheart\LaravelDiscord\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\LaravelDiscord\LaravelDiscord
 */
class LaravelDiscord extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wulfheart\LaravelDiscord\LaravelDiscord::class;
    }
}
