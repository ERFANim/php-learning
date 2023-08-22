<?php

// function name(parmetrs){statement -> return}
function sum($a,$b)
{
    return $a + $b +10;
}
// to use function pass the argumans
echo sum(10,20);

function sumif($a,$b)
{
    if($a>$b)
    {
    return $a + $b;
    }else
    {
    return $a * $b;   
    }

}
echo sumif(10,30);


function caculatur($num1,$num2,$operator)
{
    if ($operator == '+') {
        return  $num1 + $num2;
      } elseif ($operator == '-') {
        return  $num1 - $num2;
      } elseif ($operator == '*') {
        return  $num1 * $num2;
      } elseif ($operator == '/') {
        return  $num1 / $num2;
      }
}

echo caculatur(5,10,'/');


//global scope = can use out side the function
$a = 10;
$b = 15;

//local scope  = we can use values defined in function
function somefunction()
{
$a = 10;
$b = 15;
return $a + $b;
} 

// global = to define local scope 
function someglofunction()
{
global $a,$b;
return $a + $b;
} 









