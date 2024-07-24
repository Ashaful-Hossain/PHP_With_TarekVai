<?php
//type hinting with default value
function typ(string $a,int $b=0,int $c=1) {
    // echo $a=$b+$c;
    return $a= $b+$c;
}

// echo 'typ("add : b+c=",50,20)';
$d=typ("add : b+c=",50,20);
echo "<br>";
// typ("add : b+c=");
echo $d;


 