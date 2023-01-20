<?php

declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Components;

use Wulfheart\LaravelDiscord\Discord\Message\Traits\MergesArrays;

/**
 * Short Text Input Component
 * @see https://discord.com/developers/docs/interactions/message-components#text-inputs-text-input-structure
 */
class ShortTextInputComponent extends GenericTextInputComponent
{
    use MergesArrays;

    public function __construct(string $label, string $customId)
    {
        parent::__construct(static::STYLE_SHORT, $label, $customId);
    }
}
