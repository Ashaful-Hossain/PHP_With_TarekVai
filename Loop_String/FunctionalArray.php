<?php
//.....Compact().......//
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

// print_r($result);

//......array_combine();............//
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
$c = array_combine($fname, $age);
print_r($c);
