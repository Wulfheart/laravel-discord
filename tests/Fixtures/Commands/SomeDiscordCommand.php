<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands;

use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandInterface;
use Wulfheart\LaravelDiscord\Discord\Command\Traits\DiscordCommandTools;

class SomeDiscordCommand implements DiscordCommandInterface
{
    use DiscordCommandTools;
    public function handle(): void
    {

    }
}
