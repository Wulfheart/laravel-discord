<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class ApplicationCommandObject
{
    public Snowflake $id;
    public ApplicationCommandTypeEnum $type;
    public Snowflake $application_id;
}
