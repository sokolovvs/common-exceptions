<?php

namespace Sokolovvs\CommonExceptions;

class ValidationException extends ImprovedException
{
    private $errors;

    public function __construct(string $message = "Validation error", array $context = [], ValidationError ...$errors)
    {
        parent::__construct($message, $context);
        $this->errors = $errors;
    }

    public static function fromErrors(ValidationError ...$errors): self
    {
        return new self('Validation error', [], ...$errors);
    }

    /**
     * @return ValidationError[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}