<?php

$num=5;
$prime=true;

for ($i=2; $i < $num; $i++) { 
    if($num%$i==0){
        // return
         $prime=false;
        // break;
    }
}

if($prime==true){
    echo "Its a Prime Number";
}else{
    echo "Not Prime";
}