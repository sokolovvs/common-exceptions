<?php

namespace Sokolovvs\CommonExceptions;

class ValidationError
{
    private $shortDescription;

    private $fullDescription;

    private $fieldName;

    public function __construct(string $shortDescription, string $fullDescription = null, string $fieldName = null)
    {
        $this->shortDescription = $shortDescription;
        $this->fullDescription = $fullDescription;
        $this->fieldName = $fieldName;
    }

    public static function newFromShortDescription(string $shortDescription, string $fieldName = null): self
    {
        return new self($shortDescription, $shortDescription, $fieldName);
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function getFullDescription(): ?string
    {
        return $this->fullDescription;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
}