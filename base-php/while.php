<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // first define counter
    //just condition in while
    $counter = 1;
    while($counter <= 10)
    {
        //do statments
        echo "<p> number:{$counter}</p>";

        $counter = $counter + 1;
    }
    //loops end when condition false
    ?>
    
</body>
</html>