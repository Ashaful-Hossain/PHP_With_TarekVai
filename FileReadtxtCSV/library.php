
<?php
// $rechive=$_POST['headline']."*".$_POST['date']."*".$_POST['details'];
// $data=explode("^",$rechive);

function fileRead($fileUrl, $delemeter, $mode)
{
    $con = fopen($fileUrl, "$mode");  //fopen("data.txt","r");
    if ($mode == "r" && $fileUrl != null && $delemeter != null) {
        $f = fread($con, 9999);
         $data=explode($delemeter, $f);
            return $data;
    } elseif ($mode == "w") {
        
        // $dt = fwrite($con,$file);
    //    print_r($file);
    } else {
        echo "Incorrect Read Or Writing Mode";
    }
}
// fileRead("data.txt", "*", "r");
// fileRead("data.txt", "^", "w");
