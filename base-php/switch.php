<?php

//switch = optimize conditions

$a =5; $b=10;

switch($b){
    case 20:
    //do statements
    break;
    //do statements
    case 15:
    //do statements
    break;
    //do statements
    case 10:
    //do statements
    break;
    default:
    //if cases all false = do statements
    break;
}

//a way to use oparetors in switch

switch(true){
    case $a+$b>0:
    //do statements
    break;
    case $a+$b>100:
        //do statements
    break;
    default:
    //if cases all false = do statements
    break;
}
