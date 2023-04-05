<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MicroApi\Endpoint;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController
{
    #[Route('/', name: 'api_index')]
    public function index(): JsonResponse
    {
        $welcome = $this->getParameter('welcome');

        return new JsonResponse([
            'home page',
            $welcome,
        ]);
    }
}
