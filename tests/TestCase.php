<?php

namespace Wulfheart\LaravelDiscord\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Wulfheart\LaravelDiscord\LaravelDiscordServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Wulfheart\\LaravelDiscord\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDiscordServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    //    'client_public_key' => env('DISCORD_CLIENT_PUBLIC_KEY'),
        //'commands_dir' => app_path('Discord'),
        //'application_id' => env('DISCORD_APPLICATION_ID'),
        //'discord_api_url' => 'https://discord.com/api',
        //'bot_token' => env('DISCORD_BOT_TOKEN'),

        config()->set('database.default', 'testing');
        config()->set('discord.commands_dir', __DIR__.'/Fixtures/Commands');
        config()->set('discord.client_id', env('DISCORD_APPLICATION_ID'));
        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-discord_table.php.stub';
        $migration->up();
        */
    }
}
