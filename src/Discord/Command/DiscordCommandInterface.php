<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

interface DiscordCommandInterface
{
    public function handle(): void;

    public function getReflectionClass(): \ReflectionClass;
    public function setReflectionClass(\ReflectionClass $reflectionClass): void;

}
