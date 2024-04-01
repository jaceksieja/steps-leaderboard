<?php

namespace App\Infrastructure\Response;

use App\Application\ViewModel\ViewModelInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseHandler implements ResponseHandlerInterface
{
    private const RESPONSE_FORMAT = 'json';

    public function __construct(
        private readonly NormalizerInterface $normalizer
    ) {
    }

    public function handleBadResponse(string $message): Response
    {
        return new JsonResponse($message, Response::HTTP_BAD_REQUEST);
    }

    public function handleSuccessResponse(ViewModelInterface $data): Response
    {
        return new JsonResponse(
            $this->normalizer->normalize($data, self::RESPONSE_FORMAT)
        );
    }
}
