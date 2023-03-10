<?php

declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message;

use Illuminate\Contracts\Support\Arrayable;
use Wulfheart\LaravelDiscord\Discord\Message\Traits\FiltersRecursive;

/**
 * Abstract Message Component
 * @see https://discord.com/developers/docs/interactions/message-components#component-object
 */
abstract class Component implements Arrayable
{
    use FiltersRecursive;

    public const TYPE_ACTION_ROW = 1;
    public const TYPE_BUTTON = 2;
    public const TYPE_SELECT_MENU = 3;
    public const TYPE_TEXT_INPUT = 4;

    protected ?string $customId = null;

    protected function __construct(?string $customId = null)
    {
        $this->customId = $customId;
    }

    abstract public function getType(): int;

    /**
     * Returns a Discord-API compliant component array
     *
     * @see https://discord.com/developers/docs/interactions/message-components#component-object
     *
     */
    public function toArray(): array
    {
        return $this->arrayFilterRecursive([
            'type' => $this->getType(),
            'custom_id' => $this->customId,
        ]);
    }
}
