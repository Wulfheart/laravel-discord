<?php

namespace Wulfheart\LaravelDiscord\Discord\Handlers;

use Discord\InteractionResponseType;
use Illuminate\Http\Request;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionResponse;

class ApplicationCommandDiscordInteractionHandler implements DiscordInteractionHandlerInterface
{
    public function handle(Request $request): DiscordInteractionResponse
    {
        //return new DiscordInteractionResponse(InteractionResponseType::DEFERRED_CHANNEL_MESSAGE_WITH_SOURCE);
        return new DiscordInteractionResponse(InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE, [
            'content' => 'Hello World',
        ]);
    }
}
