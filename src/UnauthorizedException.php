<?php

namespace Sokolovvs\CommonExceptions;

use RuntimeException;

class UnauthorizedException extends RuntimeException
{
    public function __construct(string $message = "Authorization error")
    {
        parent::__construct($message);
    }
}