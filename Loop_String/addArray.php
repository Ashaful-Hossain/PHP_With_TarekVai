<?php
// Array Value Add // Array_Push
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Guaba");
$fruits[] = "Orange";

print_r($fruits);
//Associative Array Value Add // Add Array by Oprator += //
$cars = array(
    "brand" => "Ford",
    "model" => "Mustang"
);
$cars["color"] = "Red";
$cars += ["year" => 1999, "exp" => 2030];
print_r($cars);

//
$car = array("Volvo", "BMW", "Toyota","Honda");
foreach ($car as &$x) {
    $x = "Ford";
}
unset($x);
var_dump($car);
