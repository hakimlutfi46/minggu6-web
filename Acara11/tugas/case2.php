<?php
interface Animals
{
    public function makeSound();
}

class Cat implements Animals
{
    public function makeSound()
    {
        echo "Meow <br>";
    }
}

class Dog implements Animals
{
    public function makeSound()
    {
        echo "Guk Guk <br>";
    }
}

class Mouse implements Animals
{
    public function makeSound()
    {
        echo "Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat, $dog, $mouse);

foreach ($animals as $a) {
    $a->makeSound();
}
