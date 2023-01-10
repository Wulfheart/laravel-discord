<?php

namespace Wulfheart\LaravelDiscord\Commands;

use Illuminate\Console\Command;

class LaravelDiscordCommand extends Command
{
    public $signature = 'laravel-discord';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
