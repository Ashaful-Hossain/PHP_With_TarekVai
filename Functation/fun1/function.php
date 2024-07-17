<?php

// $dim="kkr";

// $value=$dim;
// &$value=5;
// echo $dim;
function add(&$value) {
    $value +=5;
}
$num=2;
 add($num);
 echo $num;

