<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class IntegerApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::INTEGER;
    /** @var array<ApplicationCommandOptionChoice> */
    protected array $choices;
    protected ?int $min_value;
    protected ?int $max_value;

    public function getType(): ApplicationCommandOptionTypeEnum
    {
        return $this->type;
    }

    /**
     * @return array<ApplicationCommandOptionChoice>
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param array<ApplicationCommandOptionChoice> $choices
     */
    public function setChoices(array $choices): IntegerApplicationCommandOption
    {
        $this->choices = $choices;
        return $this;
    }

    public function getMinValue(): ?int
    {
        return $this->min_value;
    }

    public function setMinValue(?int $min_value): IntegerApplicationCommandOption
    {
        $this->min_value = $min_value;
        return $this;
    }

    public function getMaxValue(): ?int
    {
        return $this->max_value;
    }

    public function setMaxValue(?int $max_value): IntegerApplicationCommandOption
    {
        $this->max_value = $max_value;
        return $this;
    }
}
