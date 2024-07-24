<pre>
<?php
if(isset($_POST['headline'])){

    $pp = $_POST['headline'] . "*" . $_POST['date'] . "*" . $_POST['details'];
}
include("library.php");
$data = fileread("data.txt", "^", "r");
array_push($data, $pp); 
// array_reverse($data);
// print_r($data);exit;
// array_unshift($data,$pp);
// echo "<pre>";
$dd = implode("^", $data);
// print_r($dd);
$con = fopen("data.txt", "w");
fwrite($con, $dd);
// $data = explode("^", $dd);
// array_unshift($data, $pp);
?>