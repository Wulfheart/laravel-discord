<?php

declare(strict_types=1);

namespace Wulfheart\LaravelDiscord\Discord\Message\Embeds;

use Wulfheart\LaravelDiscord\Discord\Message\Embed;
use Wulfheart\LaravelDiscord\Discord\Message\Traits\MergesArrays;

/**
 * Video Embed
 * @see https://discord.com/developers/docs/resources/channel#embed-object-embed-video-structure
 */
class VideoEmbed extends Embed
{
    use MergesArrays;

    protected string $url;

    protected ?string $proxyUrl = null;

    protected ?int $height = null;

    protected ?int $width = null;

    public function __construct(string $url, ?string $title = null, ?string $description = null, ?string $timestamp = null)
    {
        parent::__construct($title, $description, $timestamp);
        $this->url = $url;
    }

    /**
     * A proxied url of the video
     *
     * @see https://discord.com/developers/docs/resources/channel#embed-object-embed-video-structure
     * @return $this
     */
    public function withProxyUrl(string $proxyUrl): self
    {
        $this->proxyUrl = $proxyUrl;
        return $this;
    }

    /**
     * Height of video
     *
     * @see https://discord.com/developers/docs/resources/channel#embed-object-embed-video-structure
     * @return $this
     */
    public function withHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Width of video
     *
     * @see https://discord.com/developers/docs/resources/channel#embed-object-embed-video-structure
     * @return $this
     */
    public function withWidth(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getType(): string
    {
        return static::TYPE_VIDEO;
    }

    public function toArray(): array
    {
        return $this->toMergedArray([
            'video' => [
                'url' => $this->url,
                'proxy_url' => $this->proxyUrl,
                'height' => $this->height,
                'width' => $this->width,
            ],
        ]);
    }
}
