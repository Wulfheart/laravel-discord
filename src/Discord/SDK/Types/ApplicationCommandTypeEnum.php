<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Types;

enum ApplicationCommandTypeEnum: int
{
    case CHAT_INPUT = 1;
    case USER = 2;
    case MESSAGE = 3;
}
