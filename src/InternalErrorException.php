<?php

namespace Sokolovvs\CommonExceptions;

use Throwable;

class InternalErrorException extends ImprovedException
{
    public function __construct(string $message = 'Internal error', array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, $context, $previous);
    }
}