<?php

function add(int $f,int $s) {
    $r=$f+$s;
    return array($r,$f,$s);
}

$data=list($result,$first,$second)=add(15,20);
print_r($data);
// echo implode($data);