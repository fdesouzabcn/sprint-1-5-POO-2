<?php
// ----------------------------------------------------------------
// ------ Exercise 1: Animal Class with Polymorphism --------------
//-----------------------------------------------------------------
declare(strict_types=1);

//Parent Class 
abstract class Animal
{
    // Protected property 
    protected string $name;
    
    // Constructor to animal name 
    public function __construct(string $name) {
        $this->name = $name;
    }
    // Abstract method - animal sound
    abstract public function speak (): string;
    
    // Get Animal's Name 
    public function getName(): string {
    return $this->name;
    }

    // Display Animal Name and Sound - to avoid repetition in the child's 
    public function introduce(): void {
        echo "<strong>{$this->name}</strong> says: <strong>{$this->speak()}</strong><br><br>";
    }
}

// Child Classes (Animals) - providing its own unique implementation of speak()
class Dog extends Animal 
{
    public function speak (): string {
        return "Woof, Woof!";
    }
}

class Cat extends Animal
{
    public function speak (): string {
        return "Meow, Meow!";
    }
}

class Chicken extends Animal
{
    public function speak (): string {
        return "Cluck, Cluck!";
    }
}

class Cow extends Animal
{
    public function speak (): string {
        return "Moo, Moo!";
    }
}

class Pig extends Animal
{
    public function speak (): string {
        return "Oink, Oink!";
    }
}

class Duck extends Animal
{
    public function speak (): string {
        return "Quack, Quack!";
    }
}


//----------------------------
//------- Testing ------------
//----------------------------

$Dog = new Dog("Rufus");
echo "What sound does the <strong>" . $Dog->getName() . "</strong> the Dog make? <strong>" . $Dog->speak() . "</strong><br><br>";

$Duck = new Duck("Dayse");
echo "What sound does the <strong>" . $Duck->getName() . "</strong> the Duck make? <strong>" . $Duck->speak() . "</strong><br><br>";

$animals = [
    new Dog("Rufus"),
    new Dog("Yang"),
    new Cat("Satanás"),
    new Chicken("Margo"),
    new Cow("Mimosa"),
    new Pig("Pigglet"),
    new Duck("Dayse"),
];

foreach ($animals as $animal) {
 $animal->introduce();
}

?>