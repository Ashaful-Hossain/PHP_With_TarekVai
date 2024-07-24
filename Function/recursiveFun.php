<?php

function add($n){
    if($n>=1){
        return $n*add($n-1);
    } else { return 1; }
}

echo add(5);