<?php
/*
Write a PHP program to check whether three given integers values are in the range 20..50 inclusive
. Return true if 1 or more of them are in the said range otherwise false.
*/

function test($a,$b,$c){
    return ($a<=50 && $a>=20) || ($b<=50 && $b>=20) || ($c<=50 && $c>=20);
}
var_dump(test(100,50,87));