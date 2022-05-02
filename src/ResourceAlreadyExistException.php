<?php

namespace Sokolovvs\CommonExceptions;

use RuntimeException;

class ResourceAlreadyExistException extends RuntimeException
{
    public function __construct(string $message = "Resource already exist")
    {
        parent::__construct($message);
    }
}