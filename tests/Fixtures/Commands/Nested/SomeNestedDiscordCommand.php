<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\Nested;

use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandInterface;
use Wulfheart\LaravelDiscord\Discord\Command\Traits\DiscordCommandTools;

#[\Wulfheart\LaravelDiscord\Discord\Command\Attributes\ApplicationCommand(
    name: 'some-nested-discord-command',
    description: 'Some description',
)]
class SomeNestedDiscordCommand implements DiscordCommandInterface
{
    use DiscordCommandTools;

    public function handle(): void
    {
    }
}
