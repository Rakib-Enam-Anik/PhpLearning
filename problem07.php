<?php
/*
Write a PHP program to create a new string taking the first 3 characters of a given
string and return the string with the 3 characters added at both the front and back
.If the given string length is less than 3, use whatever characters are there.
*/

function test($str){
    if(strlen($str) < 3){
        return $str . $str . $str;
    }else{
        $c = substr($str,0,3);
        return $str ." ". $str ." ". $str;
    }

}
echo test("Smart");