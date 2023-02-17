<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Profiler\Profiler;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class DemoController
{
    #[Route('/')]
    public function demoAction(Profiler $profiler): Response
    {
        $profiler->reset();

        return new Response('Welcome!');
    }
}