<?php

$num=5;

// for ($i=2; $i < $num; $i++) { 
//     if($num%$i==0){
//         echo "Its not a Prime number";
//         break;
//     }else{
//         echo "Its a Prime number";
//         break; 
//     };

$prime=true;

for ($i=2; $i < $num; $i++) {
    if($num%$i==0){
        $prime=false;
        break;
        
    }}
    if($prime==true){
        echo "Its a prime number";
    }else{
        echo "Not Prime";
        
    }
