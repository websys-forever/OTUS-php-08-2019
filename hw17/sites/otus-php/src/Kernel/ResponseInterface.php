<?php

declare(strict_types=1);

namespace App\Kernel;

interface ResponseInterface
{
    public function send();
}
