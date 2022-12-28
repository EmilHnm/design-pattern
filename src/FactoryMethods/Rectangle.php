<?php
namespace Hoangm\Pattern\FactoryMethods;
use Hoangm\Pattern\FactoryMethods\Interface\Shape;

class Rectangle implements Shape {
    public function draw(): void {
        echo "Inside Rectangle::draw() method." . PHP_EOL;
        echo "<div style='width: 100px; height: 50px; background: #000'></div>". PHP_EOL;
    }
}