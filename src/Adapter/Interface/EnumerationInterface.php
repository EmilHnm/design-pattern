<?php

namespace Hoangm\Pattern\Adapter\Interface;

interface EnumerationInterface {
    public function hasMoreElements(): bool;
    public function nextElement(): string;
}