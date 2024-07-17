<?php 
 
//  $test_var="Test";

//  function myVark() {
//      global $test_var;
//      global $local_var;
//     //  $GLOBALS $test_var;
//     $local_var="Habib";
//     echo $test_var;
//  }
//     myVark();
//     echo $local_var;



$num1=20;

function sum() {
    global $result;
    global $num1;
    $num2=30;
    $result=$num1+$num2;
}

sum();
echo $result;