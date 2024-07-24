<?php
// include('../library.php');
// $data = fileRead("../data.txt", "*", "r");
// print_r($data);
$con=fopen("../data.txt","r");
$d=fread($con,99999);
$data=explode("^","$d");
$data=array_reverse($data);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <title>Txt File Read</title>
</head>

<body>

    <div class="col-md-12">
        <div class="row">
            <?php
            foreach ($data as $d) {
                 $dd = explode("*", "$d"); 
                //  print_r($dd);
                 ?>
                <div class="col-md-4 ">
                    <h1><?php echo $dd[0] ?></h1>
                    <em><?php echo $dd[1] ?></em>
                    <p><?php echo $dd[2] ?></p>
                </div>
            <?php } ?>
            
        </div>
    </div>
</body>

</html>