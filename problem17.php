<?php
/*
Write a PHP program to compute the sum of the digits of a number.
*/

function sum_of_digits($num){
    $num_of_digits = 0;
    for($i = 0; $i<strlen($num);$i++){
        $num_of_digits += $num[$i];
    }
    return $num_of_digits;
}
echo sum_of_digits("2922");