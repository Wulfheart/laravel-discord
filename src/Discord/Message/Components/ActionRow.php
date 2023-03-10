<?php

declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Components;

use Wulfheart\LaravelDiscord\Discord\Message\Component;
use Wulfheart\LaravelDiscord\Discord\Message\Traits\MergesArrays;

class ActionRow extends Component
{
    use MergesArrays;

    /**
     * @var Component[]
     */
    protected array $components = [];

    /**
     * @param Component[] $components
     */
    public function __construct(array $components)
    {
        parent::__construct();
        $this->components = $components;
    }

    public function addComponent(Component $component): self
    {
        $this->components[] = $component;
        return $this;
    }

    public function getType(): int
    {
        return static::TYPE_ACTION_ROW;
    }

    public function toArray(): array
    {
        return $this->toMergedArray([
            'components' => array_map(function (Component $component): array {
                return $component->toArray();
            }, $this->components),
        ]);
    }
}
