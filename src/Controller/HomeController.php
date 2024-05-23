<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final readonly class HomeController
{
    #[Route('/', methods: ['GET'])]
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(['message' => 'Hello World!']);
    }
}
