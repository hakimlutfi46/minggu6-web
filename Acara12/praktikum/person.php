<?php
interface Person
{
    public function greeting();
}

abstract class SayHello
{
    abstract function Hello();
}

class English extends SayHello implements Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function greeting()
    {
        return "Hello " . $this->name;
    }

    public function Hello()
    {
        return ", how are you!";
    }
}

class German extends SayHello implements Person
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greeting()
    {
        return "Hello " . $this->name;
    }

    public function Hello()
    {
        return ", wie geht es dir!";
    }
}

class French extends SayHello implements Person
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greeting()
    {
        return "Bonjour " . $this->name;
    }

    public function Hello()
    {
        return ", comment vas-tu!";
    }
}

$english = new English("Hakim");
$german = new German("Hakim");
$french = new French("Hakim");

$language = array($english, $german, $french);

foreach ($language as $l) {
    echo $l->greeting();
    echo $l->Hello();
    echo "<br>";
}
