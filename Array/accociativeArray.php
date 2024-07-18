<?php

$data=array(
    "name"=>"Korim",
    "Roll"=>25,
    "dpt"=>"CSE"
);
foreach ($data as $k => $v) {
    echo "<pre>";
    echo $k++," : ";
    echo $v;
    
}

// var_dump($data);
// echo $data['dpt'];