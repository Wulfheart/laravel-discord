<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class StringApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::STRING;
    /** @var array<ApplicationCommandOptionChoice */
    protected array $choices;
    protected ?int $min_length;
    protected ?int $max_length;
}
