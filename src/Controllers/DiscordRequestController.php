<?php

namespace Wulfheart\LaravelDiscord\Controllers;

use Discord\Interaction;
use Discord\InteractionResponseType;
use Discord\InteractionType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Wulfheart\LaravelDiscord\Discord\DiscordInteractionHandlerInterface;
use Wulfheart\LaravelDiscord\Discord\Handlers\ApplicationCommandDiscordInteractionHandler;
use Wulfheart\LaravelDiscord\Discord\Handlers\PingDiscordInteractionHandler;

class DiscordRequestController extends Controller
{
    public function __invoke(Request $request)
    {
        $signature = $request->header('x-signature-ed25519');
        $timestamp = $request->header('x-signature-timestamp');

        $body = $request->getContent();

        $verified = Interaction::verifyKey($body, $signature, $timestamp, config('discord.client_public_key'));

        if (!$verified) {
            return response('Invalid signature', 401);
        }
        ray($request->all());

        /** @var class-string<DiscordInteractionHandlerInterface>|null $handler */
        $handler = match ($request->get('type')) {
            InteractionType::PING => PingDiscordInteractionHandler::class,
            InteractionType::APPLICATION_COMMAND => ApplicationCommandDiscordInteractionHandler::class,
            default => null,
        };

        if($handler === null){
            return response('Invalid interaction type', 400);
        }

        /** @var DiscordInteractionHandlerInterface $handler */
        $handler = app($handler);
        return $handler->handle($request);
    }

}
