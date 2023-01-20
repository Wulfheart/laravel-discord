<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

use Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\AbstractDiscordCommand;
use Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\Nested\SomeNestedDiscordCommand;
use Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\Nested\WithAttributeButNotInterface;
use Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\SomeDiscordCommand;
use Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\SomeNormalClass;
use Wulfheart\LaravelDiscord\Tests\TestCase;

class DiscordCommandKernelTest extends TestCase
{
    public function testLoading()
    {
        $kernel = new DiscordCommandKernel();
        $kernel->loadDiscordCommands([config('discord.commands_dir')]);
        $this->assertNotEmpty($kernel->getCommands());
        $this->assertCount(2, $kernel->getCommands());
        $commands = collect($kernel->getCommands());

        $expectedClasses = [
            SomeNestedDiscordCommand::class,
            SomeDiscordCommand::class,
        ];
        foreach ($expectedClasses as $expect) {
            $this->assertTrue($commands->filter(fn (DiscordCommandInterface $command) => $command::class === $expect)->count() == 1);
        }

        $notExpectedClasses = [
            AbstractDiscordCommand::class,
            SomeNormalClass::class,
            WithAttributeButNotInterface::class
        ];
        foreach ($notExpectedClasses as $notExpectedClass) {
            $this->assertTrue($commands->filter(fn (DiscordCommandInterface $command) => $command::class === $notExpectedClass)->count() === 0);
        }
    }

    public function testRegisterCommands()
    {
        $kernel = new DiscordCommandKernel();
        $kernel->loadDiscordCommands([config('discord.commands_dir')]);
        $kernel->registerCommands();
        $this->assertTrue(true);
    }
}
