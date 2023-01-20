<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandOptions;

use Wulfheart\LaravelDiscord\Discord\SDK\Types\BaseType;

class ApplicationCommandOption extends BaseType
{
    protected ApplicationCommandOptionTypeEnum $type;
    protected string $name;
    protected string $description;
    protected ?bool $required;
    protected ?bool $autocomplete;
}
