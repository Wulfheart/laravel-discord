<?php
declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Builder;

use Wulfheart\LaravelDiscord\Discord\Message\Component;
use Wulfheart\LaravelDiscord\Discord\Message\Components\ActionRow;
use Wulfheart\LaravelDiscord\Discord\Message\Components\ButtonComponent;
use Wulfheart\LaravelDiscord\Discord\Message\Components\LinkButtonComponent;
use Wulfheart\LaravelDiscord\Discord\Message\Components\ParagraphTextInputComponent;
use Wulfheart\LaravelDiscord\Discord\Message\Components\SelectMenuComponent;
use Wulfheart\LaravelDiscord\Discord\Message\Components\ShortTextInputComponent;
use Wulfheart\LaravelDiscord\Discord\Message\Objects\SelectOptionObject;

class ComponentBuilder
{
    protected array $components = [];

    public function addComponent(Component $component): self
    {
        $this->components[] = $component;
        return $this;
    }

    public function addActionButton(string $label, string $customId): self
    {
        $this->components[] = new ButtonComponent($label, $customId);
        return $this;
    }

    public function addLinkButton(string $label, string $url): self
    {
        $this->components[] = new LinkButtonComponent($label, $url);
        return $this;
    }

    /**
     * @param SelectOptionObject[] $options
     */
    public function addSelectMenuComponent(array $options, string $customId): self
    {
        $this->components[] = new SelectMenuComponent($customId, $options);
        return $this;
    }

    public function withSelectOptionObject(string $label, string $value): SelectOptionObject
    {
        return new SelectOptionObject($label, $value);
    }

    public function addShortTextInput(string $label, string $customId): self
    {
        $this->components[] = new ShortTextInputComponent($label, $customId);
        return $this;
    }

    public function addParagraphTextInput(string $label, string $customId): self
    {
        $this->components[] = new ParagraphTextInputComponent($label, $customId);
        return $this;
    }

    public function getActionRow(): ActionRow
    {
        return new ActionRow($this->components);
    }
}
