<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MicroApi\Tests\Endpoint;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @covers \MicroApi\Endpoint\Home
 *
 * @internal
 */
class HomeTest extends WebTestCase
{
    /**
     * @dataProvider dataItems
     *
     * @covers \MicroApi\Endpoint\Home::index
     */
    public function testIndex(string $uri, string $route, int $statusCode): void
    {
        self::ensureKernelShutdown();
        $client = static::createClient();

        $client->request(method: 'GET', uri: $uri);
        $code = $client->getResponse()->getStatusCode();
        $routeName = $client->getRequest()->attributes->get('_route');

        $this->assertJson(strval($client->getResponse()->getContent()));
        $this->assertEquals($statusCode, $code);
        $this->assertEquals($route, $routeName);
    }

    public static function dataItems(): \Generator
    {
        yield [
            'uri' => '/',
            'route' => 'api_home_index',
            'status_code' => 200,
        ];

        yield [
            'uri' => '/fake/endpoint',
            'route' => '',
            'status_code' => 404,
        ];
    }
}
