<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

use Wulfheart\LaravelDiscord\Discord\SDK\Types\BaseType;

class ApplicationCommandOptionChoice extends BaseType
{
    protected string $name;
    protected string|int|float $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ApplicationCommandOptionChoice
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): float|int|string
    {
        return $this->value;
    }

    public function setValue(float|int|string $value): ApplicationCommandOptionChoice
    {
        $this->value = $value;
        return $this;
    }
}
