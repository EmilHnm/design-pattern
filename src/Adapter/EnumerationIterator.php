<?php

namespace Hoangm\Pattern\Adapter;

use Hoangm\Pattern\Adapter\Enumeration;
use Hoangm\Pattern\Adapter\Interface\InteratorInterface;

class EnumerationIterator implements InteratorInterface
{
    private Enumeration $enumeration;

    public function __construct(Enumeration $enumeration)
    {
        $this->enumeration = $enumeration;
    }

    public function hasNext(): bool
    {
        return $this->enumeration->hasMoreElements();
    }

    public function next(): string
    {
        return $this->enumeration->nextElement();
    }

    public function remove(): void
    {
        throw new \Exception("Unsupported operation");
    }
}