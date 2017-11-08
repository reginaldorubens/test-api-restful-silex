<?php

namespace App\Exception;

class UnauthorizedException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
