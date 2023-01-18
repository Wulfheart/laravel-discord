<?php

namespace Wulfheart\LaravelDiscord\Discord;


use Illuminate\Http\Request;

interface DiscordInteractionHandlerInterface
{
    public function handle(Request $request): DiscordInteractionResponse;

}
