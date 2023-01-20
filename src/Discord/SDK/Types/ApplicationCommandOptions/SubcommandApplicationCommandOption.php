<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class SubcommandApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::SUB_COMMAND;
    /** @var array<ApplicationCommandOption */
    protected array $options;
}
