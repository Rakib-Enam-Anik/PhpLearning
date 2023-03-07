<?php
/*
Write a PHP program to check the largest number among three given integers
*/
function largest_Number($a,$b,$c){
    return max($a,$b,$c);

}

echo largest_Number(3,6,8);