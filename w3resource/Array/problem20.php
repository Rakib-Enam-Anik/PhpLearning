<?php
//Write a PHP function to sort an array according to another array acting as a priority list. 
function list_cmp($a, $b){
    global $order;
    foreach($order as $key => $value){
        if($a==$value){
            return 0;
            break;
        }
    if($b==$value){
        return 1;
        break;
    }
    }
}
$order[0] = 1;
$order[1] = 3;
$order[2] = 4;
$order[3] = 2;
$order[4] = 7;
$order[1] = 9;

usort($array, "list_cmp");

print_r($array);
?>