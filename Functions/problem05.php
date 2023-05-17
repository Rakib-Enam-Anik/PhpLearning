<?php
//Write a PHP function that checks whether a string is all lowercase. 
function is_str_lowercase($str1){
    for ($sc = 0; $sc < strlen ($str1); $sc++){
        if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')){
            return false;
        }
    }
    return true;

}

var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));

?>