<?php

namespace Hoangm\Pattern\Singleton;

class Boilder  
{
    private static $instance = null;
    private $empty = true;
    private $boiled = false;

    private function __construct() {}

    public static function getInstance(): Boilder
    {
        if (self::$instance == null) {
            self::$instance = new Boilder();
        }
        return self::$instance;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "Boilder is filled" . PHP_EOL;
        }
    }

    public function drain(): void
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "Boilder is drained" . PHP_EOL;
        }
    }

    public function boil(): void
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
            echo "Boilder is boiled" . PHP_EOL;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }

}
