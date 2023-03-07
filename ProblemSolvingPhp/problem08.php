<?php
/*
Write a PHP program to check if a given string starts with 'C#' or not.
Sample Input: "C# sharp"
"C++"
Sample Output:
bool(true)
bool(false)
*/

function test($str){
    return (strlen($str) < 3 && $str=="C#") || (substr($str,0,2) == "C#" && substr($str,2,2) == '');

}

var_dump(test("C#"));
var_dump(test("C++"));