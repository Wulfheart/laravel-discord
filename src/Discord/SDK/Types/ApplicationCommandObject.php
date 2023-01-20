<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class ApplicationCommandObject extends BaseType
{
    protected Snowflake $id;
    protected ApplicationCommandTypeEnum $type;
    protected Snowflake $application_id;
    protected Snowflake $guild_id;
    protected string $name;
    protected string $description;

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
