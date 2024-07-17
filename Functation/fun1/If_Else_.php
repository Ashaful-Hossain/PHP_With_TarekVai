<?php

$num1=5;
$num2=10;
// Single Condition If Statement //
if($num1==5){
    echo "Good<br>";
};

// Conditional Statement use If Else  //
if($num1==6){
    echo "vary good";
}else{
    echo "not good<br>";
};

// Conditional Statement use If-ElseIf-else  //
if($num1==7){
    echo "vary good";
}elseif($num1===5){
    echo "Not bad <br>";
}
else{
    echo "not good";
};

// Conditional Statement use And,$$.xor.or,||,

if($num1==5 || $num2==10){
        echo "its an or Gate<br>";
};
if($num1==10 || $num2==10){
        echo "its an or Gate2<br>";
}else{
    echo "Dont match Nor gate<br>";
};
if($num1==10 && $num2==10){
        echo "its an and Gate1<br>";
}else{
    echo "Dont match and gate<br>";
};
if($num1==5 && $num2==10){
        echo "its an and Gate1<br>";
}else{
    echo "Dont match and gate";
};


