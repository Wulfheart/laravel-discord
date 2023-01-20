<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\Nested;

use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandInterface;
use Wulfheart\LaravelDiscord\Discord\Command\Traits\DiscordCommandTools;

class SomeNestedDiscordCommand implements DiscordCommandInterface
{
    use DiscordCommandTools;

    public function handle(): void
    {
    }
}
