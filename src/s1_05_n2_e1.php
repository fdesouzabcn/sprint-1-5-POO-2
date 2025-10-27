<?php

// --------------------------------------------------------------------
// ---- Exercise 3: Calculate Area using Interface (aka Contracts) ----
// --------------------------------------------------------------------
// -------------------------  (Adding Circle) -------------------------
//---------------------------------------------------------------------

declare(strict_types=1);

//Interface defines the contract
interface AreaToCalculate
{
    public function calculateArea(): float;
}

// Base class Shape
class Shape 
{
    public float  $lenght;
    public float  $width;
    
    // Constructor of  length and width
    public function __construct(float $lenght, float $width) {
        $this->lenght  = $lenght;
        $this->width  = $width;
    }
}

//Child Classes (Triangle, Rectangle and + Circle) 

class Triangle extends Shape implements AreaToCalculate {
    // Method that calculate the area of a Triangle 
    public function calculateArea(): float {
        return ($this->width * $this->lenght) / 2;
    }

    public function name(): string {
        return get_class($this);
    }
}

class Rectangle extends Shape implements AreaToCalculate {
    // Method that calculate the area of a Rectangle 
    public function calculateArea(): float {
        return $this->width * $this->lenght;
    }
     public function name(): string {
        return get_class($this);
    }
    
}

// Child Classes (Circle) - only Implements Interface - since it's use different properties (radio vs width/lenght)
class Circle implements AreaToCalculate {
    public float $radius;
    
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea(): float {
        return pi() * ($this->radius ** 2);
    }
    
    public function name(): string {
        return get_class($this);
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
    echo $shape->name() . " Area :" . round($shape->calculateArea(),2) . "<br><br>";
}
?>