<?php

namespace Hoangm\Pattern\FactoryMethods;

use Hoangm\Pattern\FactoryMethods\Circle;
use Hoangm\Pattern\FactoryMethods\Square;
use Hoangm\Pattern\FactoryMethods\Rectangle;
use Hoangm\Pattern\FactoryMethods\Interface\Shape;

class ShapeFactory {
    public static function getShape(string $shapeType): Shape {
        if ($shapeType == "CIRCLE") {
            return new Circle();
        } else if ($shapeType == "RECTANGLE") {
            return new Rectangle();
        } else if ($shapeType == "SQUARE") {
            return new Square();
        }
        return null;
    }
}