<?php
/*
Write a PHP program to check two given integers whether either of them is in the range 100..200 incluive
*/

function test($a,$b){
return ($a >= 100 && $a <= 200) || ($b >= 100 && $b <= 200);
}
var_dump(test(101,102));
var_dump(test(99,205));