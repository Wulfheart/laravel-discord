<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class NumberApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::NUMBER;
    /** @var array<ApplicationCommandOptionChoice */
    protected array $choices;
    protected ?int $min_value;
    protected ?int $max_value;
}
