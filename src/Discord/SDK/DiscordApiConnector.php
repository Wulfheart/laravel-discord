<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class DiscordApiConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return config('discord.api_url');
    }

    public function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator(config('discord.bot_token'), 'Bot');
    }
}
