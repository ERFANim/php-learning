<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//DRY = dont repet your self
// . = concatenate strings 
// for(defin counter; condition; steps stop){statements of count}

for($counter =1; $counter <=10; $counter =$counter+1)
{
   echo "  number ".$counter;
}

for($counter =1; $counter <=10; $counter =$counter+1)
{
   echo "<p>number {$counter}</p>";
}

?>

    
</body>
</html>
