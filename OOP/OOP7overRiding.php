<?php

class ParentClass
{
    protected $name;
    public function __construct()
    {
        $this->sayHi();
    }
    public function sayHi()
    {
        echo "Hi From Parent <br>";
    }
    public function sayHi2()
    {
        echo "Hi2 From Parent <br>";
    }
}

class ChildClass extends ParentClass
{
    public function sayHi()
    {
        parent::sayHi2();
        echo "Hello <br>";
    }
}

$c = new ChildClass();
// $c->sayHi();
