<?php

// -----------------------------------------------------------
// ---- Exercise 2: Calculate Area using Abstract classes ----
//------------------------------------------------------------

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

//Child Classes (Triangle and Rectangle) 
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

//----------------------------
//------- Testing ------------
//----------------------------

$shapes = [
    new Triangle(10, 5), // 25
    new Rectangle(10, 5) // 50
];

foreach ($shapes as $shape) {
    echo $shape->getName() . " Area :" . $shape->calculateArea() . PHP_EOL;
}
?>