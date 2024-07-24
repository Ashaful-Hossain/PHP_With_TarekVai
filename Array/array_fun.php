<pre>
<?php

// $data = ["dhaka", 'noakhali', 123,];
$data = [41, 41, 12, 13, 12, 11];
// echo array_sum($data);
$sub = ["Bangla", "Math", "Html", "CSS", "English", "Ict"];
print_r(array_chunk($sub,2));
shuffle($sub);
// print_r($sub);
// print_r(array_count_values($data));
//  print_r(array_reverse($data));
//  print_r(array_unique($data));
// sort($data);
// rsort($data);
// print_r($data);
// var_dump(in_array("dhaka",$data));

$dd = array(
    "dist"=> "Borishal",
    "name" => "Akash",
    "dpt" => "CSE",
    "roll" => 155,
    "fee" => 5000
);
// krsort($dd);
// ksort($dd);
// asort($dd);
// arsort($dd);
// $d=array_merge($data,$dd);
// $d=array_combine($da,$data);
////..Array_rend() index print kore
// echo $d=array_rand($sub);

//  print_r ($sub[$d]);
// echo $sub[$d[0]];
// echo "<br>";
// echo $sub[$d[1]];
// echo "<br>";
// echo $sub[$d[2]];
// echo "<br>";
// print_r(count($dd));
// echo count($dd);
// echo sizeof($dd);

// var_dump(array_key_exists("name",$dd));
// //.....Array search only for Value search......////
// var_dump(array_search("CSE",$dd));
// var_dump(array_keys($dd));
// var_dump(array_values($dd));
// var_dump(array_values($dd));

////.....Loop by key() Function....
////..next Data accessing by next()function....
////..because keys have no 0,1,2 indexing number so it accessing by vasual pointer next next next
// while ($a = key($dd)) {
//     // echo $a."<br>";
//     echo $dd[$a] . "<br>";
//     next($dd);
// }


////.-- data accessing/controlling position by vatual curcor/pointer

// echo $dd['dpt'];
// echo next($dd);
// echo prev($dd);
// echo end($dd);
// echo reset($dd);
