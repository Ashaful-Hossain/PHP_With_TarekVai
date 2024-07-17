<?php

function isEven($n) {
    if($n%2==0){
        return true;
    }return false;
}

$x=12;

if(!isEven($x)){
    echo "$x is an Even number";
}else{
    echo "$x is an Odd number";
}