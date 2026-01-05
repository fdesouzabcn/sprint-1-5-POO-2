<?php

// ---------------------------------------------------------------
// ---- Exercise: Extended Adding Circle and Calculating area ----
//----------------------------------------------------------------

declare(strict_types=1);
abstract class Shape 
{
    protected float  $width;
    protected float  $height;
    
    // Constructor of length and width, as required. 
    public function __construct(float $width, float $height) {
        $this->width   = $width;
        $this->height   = $height;
    }

    abstract public function calculateArea(): float;
        
    public function getName(): string {
        return get_class($this);
    }
}

//=== Child Classes ===

// Triangle: uses base and height
class Triangle extends Shape{
    public function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }
}
// Rectangle: uses width and height
class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}

// Circle: uses radius (require adapt the constructor)
class Circle extends Shape {
    public function __construct(float $radius) {
        parent::__construct($radius, $radius);
    }
    
    public function calculateArea(): float {
        return pi() * ($this->width ** 2);
    }
}

//----------------------------
//------- Testing ------------
//----------------------------

$shapes = [
    new Triangle(10, 5), // 25
    new Rectangle(10, 5), // 50
    new Circle(5)// 78.54
];

foreach ($shapes as $shape) {
    echo $shape->getName() . " Area :" . $shape->calculateArea() . PHP_EOL;
}

?>