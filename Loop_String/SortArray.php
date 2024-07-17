<?php
//
$age = array(
    "Peter" => "35", 
    "Ben" => "37", 
    "Joe" => "43"
    );
// krsort($age);
// ksort($age);
// asort($age);
arsort($age);
print_r($age);

$cars = array("Volvo", "BMW", "Toyota");
// sort($cars);
rsort($cars);
print_r($cars);