<?php
/*
Write a PHP program to compute the sum of the two given integer values.If the two values are the same,
then returns triple their sum.
*/

function solution($a,$b){
    if($a != $b)
    {
       $sum = ( $a + $b);
    } else {
        $sum = ( $a + $b)*3;
    }
    return $sum;

   
}

echo solution(3,3) . "</br>";
echo solution(3,2) . "</br>";
echo solution(2,5) . "</br>";


?>