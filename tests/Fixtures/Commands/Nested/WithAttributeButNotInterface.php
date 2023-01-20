<?php

namespace Wulfheart\LaravelDiscord\Tests\Fixtures\Commands\Nested;

use Wulfheart\LaravelDiscord\Discord\Command\Attributes\ApplicationCommand;

#[ApplicationCommand(
    name: 'with-attribute-but-not-interface',
    description: 'Some description',
)]
class WithAttributeButNotInterface
{
}
