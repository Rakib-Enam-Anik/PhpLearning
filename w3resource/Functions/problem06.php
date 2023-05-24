<?php
//Write a PHP function that checks whether a passed string is a palindrome or not? 
function check_palindrome($string){
    if($string == strrev($string))
       return 1;
    else
       return 0;
}
echo check_palindrome('madam')."\n";
?>