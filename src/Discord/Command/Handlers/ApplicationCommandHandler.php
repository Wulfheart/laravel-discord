<?php

namespace Wulfheart\LaravelDiscord\Discord\Command\Handlers;

use Illuminate\Http\Request;
use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\Command\ApplicationCommand;

class ApplicationCommandHandler implements DiscordCommandHandlerInterface
{
    public function __construct(
        protected ApplicationCommand $command
    ) {
    }

    public function handle(Request $request): void
    {
        $this->command->handle();
    }

    public function toRegisterRequest(): array
    {
        return [
            'name' => $this->command->name,
            'description' => $this->command->description,
            'type' => $this->command->commandType->value,
        ];
    }
}
