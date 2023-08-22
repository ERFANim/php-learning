<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//html = static page
//php = dynamic page = generate html page

//php tag can use in html file 

$a =10;
$b =30;
echo $a + $b;

switch($b){
    case 20:
    echo "b=20";
    break;

    case 30:
    echo "b=30";
    break;
}

?>


<?php
// html tage in two php tage , php is html embeded
$isUserLog = true;
if ($isUserLog){
?>
<a href="#">Login</a>
<?php } ?>

<?php if (true): ?>
    <a href="#">Login</a>
<?php else: ?>
<?php endif; ?>







</body>
</html>