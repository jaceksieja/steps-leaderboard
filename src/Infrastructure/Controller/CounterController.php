<?php

namespace App\Infrastructure\Controller;

use App\Application\Action\CreateCounter;
use App\Application\Action\IncreaseCounter;
use App\Application\RequestModel\IncreaseCounterRequest;
use App\Infrastructure\Response\ResponseHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/counters')]
readonly class CounterController
{
    public function __construct(
        private CreateCounter $createCounter,
        private IncreaseCounter $increaseCounter,
        private ResponseHandlerInterface $responseHandler
    ) {
    }

    #[Route(path: '', methods: ['POST'])]
    public function create(Request $request): Response
    {
        try {
            $counter = ($this->createCounter)();

            return $this->responseHandler->handleSuccessResponse($counter);

        } catch (\Throwable $exception) {
            return $this->responseHandler->handleBadResponse(
                sprintf('Unhandled exception %s', $exception->getMessage())
            );
        }
    }

    #[Route(path: '/{id}/increase', methods: ['PATCH'])]
    public function increase(Request $request): Response
    {

        try {
            $increaseCounterRequest = new IncreaseCounterRequest(
                $request->attributes->get('id'),
                $request->getPayload()->get('value')
            );

            $counter = ($this->increaseCounter)(
                $increaseCounterRequest
            );

            return $this->responseHandler->handleSuccessResponse($counter);

        } catch (\Throwable $exception) {
            return $this->responseHandler->handleBadResponse(
                sprintf('Unhandled exception %s', $exception->getMessage())
            );
        }
    }

    #[Route(path: '/{id}', methods: ['GET'])]
    public function get(Request $request): Response
    {
        throw new \RuntimeException('to be implemented');
    }

}
