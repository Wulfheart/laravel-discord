<?php

namespace Wulfheart\LaravelDiscord;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wulfheart\LaravelDiscord\Commands\LaravelDiscordCommand;
use Wulfheart\LaravelDiscord\Commands\RegisterDiscordCommandsCommand;

class LaravelDiscordServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-discord')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-discord_table')
            ->hasRoute('discord')
            ->hasCommands([
                LaravelDiscordCommand::class,
                RegisterDiscordCommandsCommand::class,
            ]);
    }
}
