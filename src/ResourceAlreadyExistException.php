<?php

namespace Sokolovvs\CommonExceptions;

use Throwable;

class ResourceAlreadyExistException extends ImprovedException
{
    public function __construct(string $message = "Resource already exist", array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, $context, $previous);
    }
}