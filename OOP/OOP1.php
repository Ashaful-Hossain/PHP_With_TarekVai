
<?php

class Human
{
    public $name;
    public $age;
    public function __construct($name,$age=0)
     {       
    // echo "Welcome To Our Human Class";
        $this->name = $name;
        $this->age = $age;
    }

    function SayHi()
    {
        echo "Salam <br>";
    }
    function SayName()
    {
        $this->SayHi();
        if($this->age){
            echo "My name is {$this->name}{$this->age} <br>";
        }else{
            echo "My name is {$this->name}<br> I do not want to explain my age";

        }
    }
}
class Cat
{
    function SayHi()
    {
        echo "Mew\n";
    }
}
class Dog
{
    function sayHi()
    {
        echo "Ghew";
    }
}
////....Multiple Object in Same Class............... 
$h1 = new Human("Mamun",21);
$h2=new Human("Korim",42);
$h3=new Human("Akhia Akhi");
$c1 = new Cat();
// $c1->sayHi();
$d1 = new Dog();
// $h1->name="Kuddus"; //SET Method Operation..........
// $h2->name="Amirul";
// echo $h1->SayHi();
// echo $c1->SayHi();
// echo $d1->SayHi();
// echo $h1->name;//GET Method Operation..........
// echo $h2->name;
echo $h1->SayName();
echo $h2->SayName();
echo $h3->SayName();
