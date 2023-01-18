<?php
declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Objects;

use Wulfheart\LaravelDiscord\Discord\Message\SupportObject;
use Wulfheart\LaravelDiscord\Discord\Message\Traits\MergesArrays;

/**
 * Emoji Object
 * @see https://discord.com/developers/docs/resources/emoji#emoji-object-emoji-structure
 */
class EmojiObject extends SupportObject
{
    use MergesArrays;

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns a Discord-API compliant emoji object array
     *
     * @see https://discord.com/developers/docs/resources/emoji#emoji-object-emoji-structure
     * @return array
     */
    public function toArray(): array
    {
        return $this->toMergedArray([
            'name' => $this->name,
        ]);
    }
}
