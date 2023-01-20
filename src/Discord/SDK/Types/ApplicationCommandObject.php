<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class ApplicationCommandObject extends BaseType
{
    protected ?Snowflake $id = null;
    protected ApplicationCommandTypeEnum $type;
    protected ?Snowflake $application_id = null;
    protected ?Snowflake $guild_id = null;
    protected string $name;
    protected string $description;

    public function toArray(): array
    {
        return [
            'id' => $this->id?->content,
            'type' => $this->type->value,
            'application_id' => $this->application_id?->content,
            'guild_id' => $this->guild_id?->content,
            'name' => $this->name,
            'description' => $this->description,
        ];
    }

    public function getId(): Snowflake
    {
        return $this->id;
    }

    public function setId(Snowflake $id): ApplicationCommandObject
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): ApplicationCommandTypeEnum
    {
        return $this->type;
    }

    public function setType(ApplicationCommandTypeEnum $type): ApplicationCommandObject
    {
        $this->type = $type;
        return $this;
    }

    public function getApplicationId(): Snowflake
    {
        return $this->application_id;
    }

    public function setApplicationId(Snowflake $application_id): ApplicationCommandObject
    {
        $this->application_id = $application_id;
        return $this;
    }

    public function getGuildId(): Snowflake
    {
        return $this->guild_id;
    }

    public function setGuildId(Snowflake $guild_id): ApplicationCommandObject
    {
        $this->guild_id = $guild_id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ApplicationCommandObject
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ApplicationCommandObject
    {
        $this->description = $description;
        return $this;
    }
}
