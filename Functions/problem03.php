<?php
// Write a function to reverse a string.
function reverse_string($str1){
    $n = strlen($str1);
    if($n == 1){
        return $str1;
    }
    else{
        $n--;
        return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
    }
}
print_r(reverse_string('1234')."\n");
?>