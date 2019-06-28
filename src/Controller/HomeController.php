<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function handle(): Response
    {
        return new Response('NOT OK AT ALL IT\'S  VERY TOO HOT.... TEST WITH PULL REQUEST... NOT ON TRAVIS ANYMORE ?! TEST WITH TRAVIS ORG');
    }
}
