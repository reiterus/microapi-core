<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MicroApi\Tests\Endpoint;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @coversNothing
 *
 * @internal
 */
class ApiWebTestCase extends WebTestCase
{
    public function sendGet(string $uri, string $method = 'GET'): KernelBrowser
    {
        self::ensureKernelShutdown();
        $client = static::createClient();

        $client->request(
            $method,
            $uri,
            [],
            [],
            [
                'content_type' => 'application/json',
            ]
        );

        return $client;
    }
}
