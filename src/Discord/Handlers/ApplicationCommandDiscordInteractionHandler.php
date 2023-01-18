<?php

namespace Wulfheart\LaravelDiscord\Discord\Handlers;

use Discord\InteractionResponseType;
use Illuminate\Http\Request;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionResponse;
use Wulfheart\LaravelDiscord\Discord\Message\Builder\EmbedBuilder;
use Wulfheart\LaravelDiscord\Discord\Message\Message;

class ApplicationCommandDiscordInteractionHandler implements DiscordInteractionHandlerInterface
{
    public function handle(Request $request): DiscordInteractionResponse
    {
        //return new DiscordInteractionResponse(InteractionResponseType::DEFERRED_CHANNEL_MESSAGE_WITH_SOURCE);
        return new DiscordInteractionResponse(InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE,
            Message::create()->embeds((new EmbedBuilder())->addAuthor("Foo")->addFooter("Footer"))->toMessageData()
        );
    }
}
