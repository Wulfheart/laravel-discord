<?php

// config for Wulfheart/LaravelDiscord
return [
    'client_public_key' => env('DISCORD_CLIENT_PUBLIC_KEY'),
    'commands_dir' => app_path('Discord'),
    'application_id' => env('DISCORD_APPLICATION_ID'),
    'api_url' => 'https://discord.com/api',
    'bot_token' => env('DISCORD_BOT_TOKEN'),

];
