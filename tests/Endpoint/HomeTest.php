<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MicroApi\Tests\Endpoint;

/**
 * @covers \MicroApi\Endpoint\Home
 *
 * @internal
 */
class HomeTest extends ApiWebTestCase
{
    /**
     * Test real endpoint.
     *
     * @covers \MicroApi\Endpoint\Home::index
     */
    public function testIndex(): void
    {
        $client = $this->sendGet('/');
        $this->assertJson(strval($client->getResponse()->getContent()));

        $code = $client->getResponse()->getStatusCode();
        $this->assertEquals(200, $code);

        $routeName = $client->getRequest()->attributes->get('_route');
        $this->assertEquals('api_home_index', $routeName);
    }

    /**
     * Test fake endpoint.
     */
    public function test404(): void
    {
        $client = $this->sendGet('/fake/endpoint');
        $this->assertJson(strval($client->getResponse()->getContent()));

        $code = $client->getResponse()->getStatusCode();
        $this->assertEquals(404, $code);
    }
}
