<?php

namespace Sokolovvs\CommonExceptions;

class ValidationError
{
    private $message;

    private $fieldName;

    public function __construct(string $message, string $fieldName = null)
    {
        $this->message = $message;
        $this->fieldName = $fieldName;
    }


    public function getMessage(): string
    {
        return $this->message;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

}