<?php
namespace Hoangm\Pattern\FactoryMethods;
use Hoangm\Pattern\FactoryMethods\Interface\Shape;

class Circle implements Shape {
    public function draw(): void {
        echo "Inside Circle::draw() method." . PHP_EOL;
        echo "<div style='clip-path: circle(50% at 50% 50%); width: 50px; height: 50px; background: #000'></div>". PHP_EOL;
    }
}