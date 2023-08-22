<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //include = attach php files = use function definded
    
    // relative adress 
    include "files/functions.php";

    // absalute path 
    include "C:/xampp/htdocs/php/files/vars.php";

    // include_once = chek just add one time
    include_once "files/vars.php";
    ?>
    <?php echo sum(10,20); ?>
    <a href="<?php echo $website; ?>"> go to 7learn</a>
</body>
</html>