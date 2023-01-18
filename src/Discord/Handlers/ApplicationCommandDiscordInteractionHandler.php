<?php

namespace Wulfheart\LaravelDiscord\Discord\Handlers;

use Discord\InteractionResponseType;
use Illuminate\Http\Request;
use Wulfheart\LaravelDiscord\Discord\Command\ApplicationCommand;
use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandKernel;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionResponse;
use Wulfheart\LaravelDiscord\Discord\Message\Builder\EmbedBuilder;
use Wulfheart\LaravelDiscord\Discord\Message\Message;

class ApplicationCommandDiscordInteractionHandler implements DiscordInteractionHandlerInterface
{
    public function handle(Request $request): ?DiscordInteractionResponse
    {

        $kernel = new DiscordCommandKernel();
        $kernel->loadDiscordCommands();

        $command = $kernel->findApplicationCommand($request->input('data.name'));

        // TODO: Change this later
        if($command == null) {
            return null;
        }

        /** @var ApplicationCommand $command */
        if($command->async){
            return new DiscordInteractionResponse(InteractionResponseType::DEFERRED_CHANNEL_MESSAGE_WITH_SOURCE);
        } else {
            return new DiscordInteractionResponse(
                InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE,
                $command->handle($request)->toMessageData()
            );
        }


    }
}
