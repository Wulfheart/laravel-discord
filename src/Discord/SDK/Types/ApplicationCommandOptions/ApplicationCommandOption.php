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

    public function getType(): ApplicationCommandOptionTypeEnum
    {
        return $this->type;
    }

    public function setType(ApplicationCommandOptionTypeEnum $type): ApplicationCommandOption
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ApplicationCommandOption
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ApplicationCommandOption
    {
        $this->description = $description;
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): ApplicationCommandOption
    {
        $this->required = $required;
        return $this;
    }

    public function getAutocomplete(): ?bool
    {
        return $this->autocomplete;
    }

    public function setAutocomplete(?bool $autocomplete): ApplicationCommandOption
    {
        $this->autocomplete = $autocomplete;
        return $this;
    }
}
