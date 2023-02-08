<?php
/*
Write a PHP program to remove duplicate from a sorted list.

Input: (1,1,2,2,3,4,5,5)
Output: (1,2,3,4,5)

*/

function duplicate_remove($value){
    $result = array_value(array_unique($value));
    return $result;
}
$list = array(1,1,2,2,3,4,5,5);
print_r(duplicate_remove($list));