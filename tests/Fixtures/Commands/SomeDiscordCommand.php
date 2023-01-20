<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands;

use Wulfheart\LaravelDiscord\Discord\Command\Attributes\ApplicationCommand;
use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandInterface;
use Wulfheart\LaravelDiscord\Discord\Command\Traits\DiscordCommandTools;

#[ApplicationCommand(
    name: 'some-discord-command',
    description: 'Some description',
)]
class SomeDiscordCommand implements DiscordCommandInterface
{
    use DiscordCommandTools;

    public function handle(): void
    {
    }
}
