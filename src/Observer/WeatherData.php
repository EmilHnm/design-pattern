<?php

namespace Hoangm\Pattern\Observer;

use Hoangm\Pattern\Observer\Interface\Subject;
use Hoangm\Pattern\Observer\Interface\Observer;

class WeatherData implements Subject {
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct() {
        $this->observers = [];
    }

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        $key = array_search($observer, $this->observers);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void {
        $this->notify();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}