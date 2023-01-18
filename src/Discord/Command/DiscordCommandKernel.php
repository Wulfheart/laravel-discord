<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

use Illuminate\Console\Application as Artisan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use ReflectionClass;
use Symfony\Component\Finder\Finder;
use Wulfheart\LaravelDiscord\Discord\Command\Handlers\ApplicationCommandHandler;

class DiscordCommandKernel
{
    /** @var array<DiscordCommand> */
    protected array $commands = [];

    public function loadDiscordCommands(): void {
        $paths = [config('discord.commands_dir')];
        $paths = array_unique(Arr::wrap($paths));

        $paths = array_filter($paths, function ($path) {
            return is_dir($path);
        });

        if (empty($paths)) {
            return;
        }

        $namespace = app()->getNamespace();

        foreach ((new Finder)->in($paths)->files() as $command) {
            $command = $namespace.str_replace(
                    ['/', '.php'],
                    ['\\', ''],
                    Str::after($command->getRealPath(), realpath(app_path()).DIRECTORY_SEPARATOR)
                );

            if (is_subclass_of($command, DiscordCommand::class) &&
                ! (new ReflectionClass($command))->isAbstract()) {
                $this->commands[] = new $command;
            }
        }
    }

    /**
     * @throws \Exception
     */
    public function registerCommands(): void {
        $commandsForRegister = [];
        foreach ($this->commands as $command) {
            ray($command instanceof ApplicationCommand);
            if($command instanceof ApplicationCommand) {
                $handler = new ApplicationCommandHandler($command);
            } else {
                throw new \Exception("Command is not supported " . $command::class);
            }
            $commandsForRegister[] = $handler->toRegisterRequest();

        }
        $response = Http::withToken(config('discord.bot_token'), 'Bot')
            ->put(config('discord.api_url').'/applications/'.config('discord.client_id').'/commands', $commandsForRegister);
        $response->throw();
    }

    public function findApplicationCommand(string $name): ?DiscordCommand {
        foreach ($this->commands as $command) {
            if($command instanceof ApplicationCommand && $command->name === $name) {
                return $command;
            }
        }
        return null;
    }

}
