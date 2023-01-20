<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class StringApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::STRING;
    /** @var array<ApplicationCommandOptionChoice */
    protected array $choices;
    protected ?int $min_length;
    protected ?int $max_length;

    public function getType(): ApplicationCommandOptionTypeEnum
    {
        return $this->type;
    }

    public function getChoices(): array
    {
        return $this->choices;
    }

    public function setChoices(array $choices): StringApplicationCommandOption
    {
        $this->choices = $choices;
        return $this;
    }

    public function getMinLength(): ?int
    {
        return $this->min_length;
    }

    public function setMinLength(?int $min_length): StringApplicationCommandOption
    {
        $this->min_length = $min_length;
        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->max_length;
    }

    public function setMaxLength(?int $max_length): StringApplicationCommandOption
    {
        $this->max_length = $max_length;
        return $this;
    }
}
