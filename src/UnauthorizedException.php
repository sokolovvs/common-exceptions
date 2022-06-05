<?php

namespace Sokolovvs\CommonExceptions;

use Throwable;

class UnauthorizedException extends ImprovedException
{
    public function __construct(string $message = "Authorization error", array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, $context, $previous);
    }
}