<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>File Read Write</title>
</head>

<body>
    <h1>Txt Csv File read & Write</h1>
    <?php
    $con = fopen("data.txt", "r");
    $data = fread($con, 9999);
    $list = explode("*", $data);
    // print_r($list);exit;

    ?>
    <?php foreach ($list as $l) {
        $n = explode("^", $l);
        // print_r($n);
    ?>
        <div class="bg-aqua">
            <h1><?php echo "$n[0]"; ?></h1>
            <em><?php echo "$n[1]"; ?></em>
            <p><?php echo "$n[2]"; ?></p>
        </div>
    <?php } ?>
</body>

</html>