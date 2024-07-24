<?php

// $data=array(
//     "name"=>"Korim",
//     "Roll"=>25,
//     "dpt"=>"CSE"
// );
// foreach ($data as $k => $v) {
//     echo "<pre>";
//     echo $k++," : ";
//     echo $v;
    
// }

// var_dump($data);
// echo $data['dpt'];

$aa= array(
    array("name:"=>"Habib","roll"=>25,"dpt"=>"CSE"),
    array("name:"=>"Kalam","roll"=>35,"dpt"=>"EEE"),
         ["name:"=>"Balam","roll"=>36,"dpt"=>"CSE"],
         ["Babul",66,"DDD"],
);

print_r($aa[2]["roll"]);