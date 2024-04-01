<?php

namespace App\Infrastructure\Response;

use App\Application\ViewModel\ViewModelInterface;
use Symfony\Component\HttpFoundation\Response;

interface ResponseHandlerInterface
{
    public function handleBadResponse(string $message): Response;
    public function handleSuccessResponse(ViewModelInterface $data): Response;
}
