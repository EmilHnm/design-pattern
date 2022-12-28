<?php

namespace Hoangm\Pattern\Observer\Interface;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure): void;
}