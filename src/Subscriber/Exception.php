<?php

declare(strict_types=1);

/*
 * This file is part of the MicroApi engine based on Symfony components.
 * (c) Pavel Vasin <reiterus@yandex.ru>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MicroApi\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

/**
 * @codeCoverageIgnore
 */
class Exception implements EventSubscriberInterface
{
    /**
     * JSON response to the "kernel.exception" event.
     */
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        $response = new JsonResponse();

        if ($exception instanceof HttpExceptionInterface) {
            $code = $exception->getStatusCode();
        } else {
            $code = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        $response->setStatusCode($code);

        $answer = json_encode([
            'code' => $code,
            'message' => $exception->getMessage(),
        ]);

        $response->setJson(strval($answer));
        $event->setResponse($response);
    }

    /**
     * @return string[]
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'kernel.exception' => 'onKernelException',
        ];
    }
}
