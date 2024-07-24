<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Mustaring By Include</title>
    <style>

    </style>
</head>

<body>
    <?php
    // Defference of require and include
    // If file not found, include shown an Error but Another code will be Run 
    // If file not found, require do not show any code,untile you did not solve file location or name; 
    require('file1.php');
    require('file2.php');
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ipsa voluptatem suscipit possimus perspiciatis nihil eum, nemo aperiam blanditiis aliquid quidem deserunt adipisci soluta totam atque, nesciunt, porro placeat beatae.</p>
</body>

</html>