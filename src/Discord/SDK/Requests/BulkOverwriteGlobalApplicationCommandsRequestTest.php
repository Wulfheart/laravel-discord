<?php

namespace Wulfheart\LaravelDiscord\Discord\SDK\Requests;

use Wulfheart\LaravelDiscord\Discord\SDK\DiscordApiConnector;
use Wulfheart\LaravelDiscord\Discord\SDK\Types\ApplicationCommandObject;
use Wulfheart\LaravelDiscord\Discord\SDK\Types\SlashApplicationCommandObject;
use Wulfheart\LaravelDiscord\Tests\TestCase;

class BulkOverwriteGlobalApplicationCommandsRequestTest extends TestCase
{
    public function testRequest(): void
    {
        $connector = new DiscordApiConnector();

        $command = SlashApplicationCommandObject::make()->setName("test1")->setDescription("test");
        //dd($command->toArray());
        $request = new BulkOverwriteGlobalApplicationCommandsRequest([$command]);
        $res = $connector->send($request);
        dd($request)

        dd($res->getRawResponse());
    }
}
