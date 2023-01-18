<?php

namespace Wulfheart\LaravelDiscord\Commands;

use Illuminate\Console\Command;
use Wulfheart\LaravelDiscord\Discord\Command\DiscordCommandKernel;

class RegisterDiscordCommandsCommand extends Command
{
    public $signature = 'discord:register-commands';

    public $description = 'Register discord commands';

    public function handle(): int
    {
        $kernel = new DiscordCommandKernel();

        $kernel->loadDiscordCommands();
        $kernel->registerCommands();
        $this->comment('All done');

        return self::SUCCESS;
    }

}
