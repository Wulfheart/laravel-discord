<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

interface DiscordCommandHandlerInterface
{
    public function toRegisterRequest(): array;

}
