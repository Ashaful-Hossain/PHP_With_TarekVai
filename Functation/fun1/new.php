<?php
function sumMyNumbers(...$x)
{
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        echo $n = $x[$i];
    }
    // return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7,9,10,11);
echo $a;
