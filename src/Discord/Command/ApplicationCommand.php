<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

use Wulfheart\LaravelDiscord\Discord\Message\Message;

abstract class ApplicationCommand extends DiscordCommand
{
    public string $name;
    public string $description;

    public bool $async = true;

    public ApplicationCommandTypeEnum $commandType = ApplicationCommandTypeEnum::CHAT_INPUT;

    abstract public function handle(): Message;

    public function toRequest(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->commandType->value,
        ];

    }
}
