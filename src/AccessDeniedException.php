<?php

namespace Sokolovvs\CommonExceptions;

use Throwable;

class AccessDeniedException extends ImprovedException
{
    public function __construct(string $message = "Access denied", array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, $context, $previous);
    }

}