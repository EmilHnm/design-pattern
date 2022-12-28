<?php

namespace Hoangm\Pattern\Adapter;

use Hoangm\Pattern\Adapter\Interface\EnumerationInterface;

class Enumeration implements EnumerationInterface
{
    private $array = [];
    private $index = 0;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function hasMoreElements(): bool
    {
        return isset($this->array[$this->index]);
    }

    public function nextElement(): string
    {
        return $this->array[$this->index++];
    }
}