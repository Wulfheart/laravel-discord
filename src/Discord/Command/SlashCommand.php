<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

class SlashCommand extends DiscordCommand
{
    public string $name;
    public string $description;

    public ApplicationCommandTypeEnum $commandType = ApplicationCommandTypeEnum::CHAT_INPUT;

    public function handle()
    {

    }

    public function toRequest(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->commandType->value,
        ];

    }
}
