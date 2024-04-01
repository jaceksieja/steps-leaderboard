<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/teams')]
readonly class TeamController
{
    public function __construct(
    ) {
    }

    #[Route(path: '', methods: ['POST'])]
    public function create(Request $request): Response
    {
        throw new \RuntimeException('to be implemented');
    }

    #[Route(path: '/', methods: ['GET'])]
    public function getList(Request $request): Response
    {
        throw new \RuntimeException('to be implemented');
    }

    #[Route(path: '/{id}', methods: ['GET'])]
    public function get(Request $request): Response
    {
        throw new \RuntimeException('to be implemented');
    }

}
