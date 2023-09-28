<?php
interface Bird
{
    public function makeSound();
}

class Perkutut implements Bird
{
    public function makeSound()
    {
        echo "Cukurukuk";
    }
}

$burung = new Perkutut();
$burung->makeSound();
