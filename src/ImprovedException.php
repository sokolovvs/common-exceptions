<?php

namespace Sokolovvs\CommonExceptions;

use Exception;
use Throwable;

class ImprovedException extends Exception
{
    private $context;

    public function __construct(string $message, array $context = [], Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->context = $context;
    }

    public function getContext(): array
    {
        return $this->context;
    }
}