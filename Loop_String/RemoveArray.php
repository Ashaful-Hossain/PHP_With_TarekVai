<?php
//.....Remove items from an associative array......//
$cars = array(
    "brand" => "Ford",
     "model" => "Mustang",
      "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);

//..........Array Remove...........//

$student = array("korim","Dhaka","CSE",155,"Free","habib","Tamim");

array_splice($student,3,2);
// array_shift($student);
// array_push($student);
// array_pop($student);
 print_r($student);

