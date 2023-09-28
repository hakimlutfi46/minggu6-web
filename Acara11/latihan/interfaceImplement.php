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

class Duck implements Animals
{
    public function makeSound()
    {
        echo "Bek bek ";
    }
}

$cat = new Cat();
$dog = new Dog();
$duck = new Duck();

$animals = array($cat, $dog, $duck);

foreach ($animals as $a) {
    $a->makeSound();
}
