<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class SubcommandApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::SUB_COMMAND;
    /** @var array<ApplicationCommandOption> */
    protected array $options;

    public function getType(): ApplicationCommandOptionTypeEnum
    {
        return $this->type;
    }

    /**
     * @return array<ApplicationCommandOption>
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array<ApplicationCommandOption> $options
     */
    public function setOptions(array $options): SubcommandApplicationCommandOption
    {
        $this->options = $options;
        return $this;
    }
}
