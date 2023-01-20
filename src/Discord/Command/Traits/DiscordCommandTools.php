<?php

namespace Wulfheart\LaravelDiscord\Discord\Command\Traits;

trait DiscordCommandTools
{
    protected \ReflectionClass $reflectionClass;

    public function setReflectionClass(\ReflectionClass $reflectionClass): void
    {
        $this->reflectionClass = new \ReflectionClass($this);
    }

    public function getReflectionClass(): \ReflectionClass
    {
        return $this->reflectionClass;
    }
}
