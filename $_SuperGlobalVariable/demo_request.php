<?php
include('_POST.php');
echo "<pre>";
var_dump($_SERVER);
if(isset($_REQUEST['fullName'])){
    //  global $name;
    // global $email;
    // global $dpt;
 echo $_REQUEST['fullName'];
 echo $_REQUEST['email'];
 echo $_REQUEST['dpt'];
}

// print_r($name,$email,$dpt);
