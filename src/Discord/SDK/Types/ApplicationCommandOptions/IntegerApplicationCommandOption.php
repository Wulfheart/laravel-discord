<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

class IntegerApplicationCommandOption extends ApplicationCommandOption
{
    protected ApplicationCommandOptionTypeEnum $type = ApplicationCommandOptionTypeEnum::INTEGER;
    /** @var array<ApplicationCommandOptionChoice */
    protected array $choices;
    protected ?int $min_value;
    protected ?int $max_value;
}
