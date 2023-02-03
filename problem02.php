<?php
/*
Write a PHP program to get the absolute difference between n and 51 . If n is greater than 51 return triple the absolute 
differeence.
*/

function test($n){
    
    if ( $n>51){
       
        $sub = ($n - 51) * 3 ;

    } else {
        $sub = (51 - $n);
    }
    return $sub;
}

echo test(6);