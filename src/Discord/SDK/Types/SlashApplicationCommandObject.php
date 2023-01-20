<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

class SlashApplicationCommandObject extends ApplicationCommandObject
{
    protected ApplicationCommandTypeEnum $type = ApplicationCommandTypeEnum::CHAT_INPUT;
}
