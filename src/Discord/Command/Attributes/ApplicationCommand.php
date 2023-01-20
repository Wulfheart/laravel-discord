<?php

namespace Wulfheart\LaravelDiscord\Discord\Command\Attributes;

#[\Attribute(\Attribute::TARGET_CLASS)]
class ApplicationCommand
{
    public function __construct(
        public string $name,
        public string $description = '',
        public bool $async = true,
    ) {
    }
}
