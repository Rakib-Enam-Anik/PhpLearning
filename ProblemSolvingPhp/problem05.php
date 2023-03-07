<?php
/*
Write a PHP program to create a new string which is 4 copies of the 2 front character of a given string
.If the given string length is less than 2 return the original string.
*/




function test($s){
    return strlen($s) < 2 ? $s : substr($s,0,2).substr($s,0,2).substr($s,0,2).substr($s,0,2);
}


echo test("Sm Coder") . "<br/>";
echo test("S") . "<br/>";