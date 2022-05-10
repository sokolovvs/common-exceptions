<?php

namespace Sokolovvs\CommonExceptions;

use RuntimeException;

class ValidationException extends RuntimeException
{
    private $errors;

    public function __construct(string $message = "Validation error", ValidationError ...$errors)
    {
        parent::__construct($message);
        $this->errors = $errors;
    }

    public static function fromErrors(ValidationError ...$errors): self
    {
        return new self('Validation error', ...$errors);
    }

    /**
     * @return ValidationError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}