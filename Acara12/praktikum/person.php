<?php
abstract class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function greeting();
}

interface Language
{
    public function sayHai();
}

class English extends Person implements Language
{

    public function sayHai()
    {
        return "Hello ";
    }

    public function greeting()
    {
        return ", how are you?";
    }
}

class German extends Person implements Language
{
    public function sayHai()
    {
        return "Hello ";
    }

    public function greeting()
    {
        return ", wie geht es dir?";
    }
}

class French extends Person implements Language
{
    public function sayHai()
    {
        return "Bonjour ";
    }

    public function greeting()
    {
        return ", comment vas-tu?";
    }
}

$english = new English("Hakim");
$german = new German("Hakim");
$french = new French("Hakim");

$language = array($english, $german, $french);

foreach ($language as $l) {
    echo $l->sayHai() . $l->name . $l->greeting();
    echo "<br>";
}
