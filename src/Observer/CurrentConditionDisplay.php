<?php

namespace Hoangm\Pattern\Observer;

use Hoangm\Pattern\Observer\Interface\Observer;
use Hoangm\Pattern\Observer\Interface\DisplayElement;
use \Hoangm\Pattern\Observer\Interface\Subject;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private float $pressure;
    private Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->attach($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display(): void
    {
        echo "Current conditions: {$this->temperature}C degrees and {$this->humidity}% humidity from Current Condition" . PHP_EOL;
    }
}
