<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Requests;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Wulfheart\LaravelDiscord\Discord\SDK\DiscordApiConnector;
use Wulfheart\LaravelDiscord\Discord\SDK\Types\SlashApplicationCommandObject;
use Wulfheart\LaravelDiscord\Tests\TestCase;

class BulkOverwriteGlobalApplicationCommandsRequestTest extends TestCase
{
    public function testRequest(): void
    {
        $connector = new DiscordApiConnector();

        $mockClient = new MockClient([
            BulkOverwriteGlobalApplicationCommandsRequest::class => MockResponse::fixture('bulk-overwrite-1'),
        ]);

        $command = SlashApplicationCommandObject::make()->setName("test3")->setDescription("test");
        $request = new BulkOverwriteGlobalApplicationCommandsRequest([$command]);
        $res = $connector->send($request, $mockClient);

        $this->assertTrue($res->ok());
    }
}
