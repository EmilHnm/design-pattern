<?php
namespace Hoangm\Pattern\FactoryMethods;
use Hoangm\Pattern\FactoryMethods\Interface\Shape;

class Square implements Shape {
    public function draw(): void {
        echo "Inside Square::draw() method." . PHP_EOL;
        echo "<div style='width: 50px; height: 50px; background: #000'></div>". PHP_EOL;
    }
}