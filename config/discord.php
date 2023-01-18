<?php

// config for Wulfheart/LaravelDiscord
return [
    'client_public_key' => env('DISCORD_CLIENT_PUBLIC_KEY'),
    'commands_dir' => app_path('Discord'),
    'client_id' => env('DISCORD_APPLICATION_ID'),
    'discord_api_url' => 'https://discord.com/api',
    'bot_token' => env('DISCORD_BOT_TOKEN'),

];
