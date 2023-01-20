<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use ReflectionClass;
use Symfony\Component\Finder\Finder;
use Wulfheart\LaravelDiscord\Discord\Command\Attributes\Handlers\ApplicationCommandHandler;

use function WyriHaximus\listClassesInFiles;

class DiscordCommandKernel
{
    /** @var array<DiscordCommandInterface> */
    protected array $commands = [];

    /** @returns array<DiscordCommandInterface> */
    public function getCommands(): array
    {
        return $this->commands;
    }

    public function loadDiscordCommands(array $paths = []): void
    {
        //config('discord.commands_dir');
        $paths = array_unique(Arr::wrap($paths));

        $paths = array_filter($paths, function ($path) {
            return is_dir($path);
        });

        if (empty($paths)) {
            return;
        }

        $finder = (new Finder())->in($paths)->files();
        $commands = listClassesInFiles(...$finder->getIterator());

        foreach ($commands as $command) {
            $reflection = new ReflectionClass($command);

            if (
                $reflection->implementsInterface(DiscordCommandInterface::class)
                && !$reflection->isAbstract()
            ) {
                /** @var DiscordCommandInterface $discordCommand */
                $discordCommand = new $command();
                $discordCommand->setReflectionClass($reflection);
                $this->commands[] = $discordCommand;
            }
        }
    }

    /**
     * @throws \Exception
     */
    public function registerCommands(): void
    {
        //$commandsForRegister = [];
        //foreach ($this->commands as $command) {
        //    ray($command instanceof ApplicationCommand);
        //    if ($command instanceof ApplicationCommand) {
        //        $handler = new ApplicationCommandHandler($command);
        //    } else {
        //        throw new \Exception("Command is not supported " . $command::class);
        //    }
        //    $commandsForRegister[] = $handler->toRegisterRequest();
        //
        //}
        //$response = Http::withToken(config('discord.bot_token'), 'Bot')
        //    ->put(config('discord.api_url') . '/applications/' . config('discord.client_id') . '/commands', $commandsForRegister);
        //$response->throw();
    }

    public function findApplicationCommand(string $name): ?DiscordCommandInterface
    {
        //foreach ($this->commands as $command) {
        //    if ($command instanceof ApplicationCommand && $command->name === $name) {
        //        return $command;
        //    }
        //}
        //return null;
    }
}
