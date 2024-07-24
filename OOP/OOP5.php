<?php

class Animal
{
    protected $name;
    function __construct($person)
    {
        $this->name = $person;
    }
    function run()
    {
        echo "{$this->name} is Running\n <br>";
    }
    function eat()
    {
        echo "{$this->name} is Eating\n<br>";
    }
    function sleep()
    {
        echo "{$this->name} is sleeping\n<br>";
    }
    function greet()
    {
    }
    protected function addTitle($title)
    {
        return $this->name = $title . "" . $this->name;
    }
}


class Human extends Animal
{
    function sayHi()
    {
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi <br>";
    }
}

class Cat extends Animal
{
}
// $ani = new Animal("Mamun");
$man1 = new Human("Korim");
$man1->sayHi();
// $man1->run();
// $man1->sleep();
$cat1 = new Cat("Tom");
$cat1->sleep();
// $cat1->run();
