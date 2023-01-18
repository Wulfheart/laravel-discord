<?php

namespace Wulfheart\LaravelDiscord\Discord\Handlers;

use Discord\InteractionResponseType;
use Discord\InteractionType;
use Illuminate\Http\Request;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionResponse;

class PingDiscordInteractionHandler implements DiscordInteractionHandlerInterface
{

    public function handle(Request $request): ?DiscordInteractionResponse
    {
        return new DiscordInteractionResponse(InteractionResponseType::PONG);
    }
}
