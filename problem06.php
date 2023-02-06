<?php
/*
Write a PHP program to create a new string with the  last char added at the front and back of a given 
string of length 1 or more 
*/

function test($str){
    $c = substr($str,strlen($str)-1);
    return $c . $str .$c;

}
echo test('Rakib');