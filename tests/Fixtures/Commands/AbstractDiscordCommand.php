<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands;

use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandInterface;
use Wulfheart\LaravelDiscord\Discord\Command\Traits\DiscordCommandTools;

abstract class AbstractDiscordCommand implements DiscordCommandInterface
{
    use DiscordCommandTools;

    public function handle(): void
    {
    }
}
