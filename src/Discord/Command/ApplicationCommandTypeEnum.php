<?php

namespace Wulfheart\LaravelDiscord\Discord\Command;

enum ApplicationCommandTypeEnum: int
{
    case CHAT_INPUT = 1;
    // Will be added in the future
    //case USER = 2;
    //case MESSAGE = 3;
}
