<?php

abstract class OurClass{
     function doSomething() {
        echo "Do Somthing";
    }
}

class newClass extends OurClass{
    function doSomething() {
        echo "Doing Nothing";
    }
}

$d=new newClass();
$d->doSomething();