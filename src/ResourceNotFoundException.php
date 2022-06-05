<?php

namespace Sokolovvs\CommonExceptions;

use Throwable;

class ResourceNotFoundException extends ImprovedException
{
    public function __construct(string $message = "Resource not found", array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, $context, $previous);
    }

}