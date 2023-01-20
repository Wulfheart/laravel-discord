<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandObject;

class BulkOverwriteGlobalApplicationCommandsRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(
        /** @var array<ApplicationCommandObject> $commands */
        protected array $commands
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/applications/' . config('discord.application_id') . '/commands';
    }

    protected function defaultBody(): array
    {
        return collect($this->commands)->map(fn (ApplicationCommandObject $command) => $command->toArray())->toArray();
    }
}
