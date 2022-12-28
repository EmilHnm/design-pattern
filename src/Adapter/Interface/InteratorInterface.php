<?php

namespace Hoangm\Pattern\Adapter\Interface;

interface InteratorInterface {
    public function hasNext(): bool;
    public function next(): string;
    public function remove(): void;
}