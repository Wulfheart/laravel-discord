<?php
declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Builder;

use Nwilging\LaravelDiscordBot\Contracts\Support\Builder\EmbedBuilderContract;
use Wulfheart\LaravelDiscord\Discord\Message\Embed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\AuthorEmbed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\FooterEmbed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\ImageEmbed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\ProviderEmbed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\ThumbnailEmbed;
use Wulfheart\LaravelDiscord\Discord\Message\Embeds\VideoEmbed;

class EmbedBuilder implements EmbedBuilderContract
{
    /**
     * @var Embed[]
     */
    protected array $embeds = [];

    public function addEmbed(Embed $embed): self
    {
        $this->embeds[] = $embed;
        return $this;
    }

    public function addFooter(string $text): self
    {
        $this->addEmbed(new FooterEmbed($text));
        return $this;
    }

    public function addImage(string $url): self
    {
        $this->addEmbed(new ImageEmbed($url));
        return $this;
    }

    public function addThumbnail(string $url): self
    {
        $this->addEmbed(new ThumbnailEmbed($url));
        return $this;
    }

    public function addVideo(string $url): self
    {
        $this->addEmbed(new VideoEmbed($url));
        return $this;
    }

    public function addProvider(string $name, string $url): self
    {
        $embed = new ProviderEmbed();
        $embed->withName($name)->withUrl($url);

        $this->addEmbed($embed);
        return $this;
    }

    public function addAuthor(string $name): self
    {
        $this->addEmbed(new AuthorEmbed($name));
        return $this;
    }

    public function getEmbeds(): array
    {
        return $this->embeds;
    }

    public function toArray(): array
    {
        return array_map(function (Embed $embed): array {
            return $embed->toArray();
        }, $this->embeds);
    }
}
