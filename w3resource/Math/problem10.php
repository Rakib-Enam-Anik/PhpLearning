<?php
// Write a PHP function to get random float numbers.
function rand_float($st_num=0,$end_num=1,$mul=100000000){
    if ($st_num>$end_num) return false;
    return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
}
echo rand_float()."\n";
echo rand_float(0.6)."\n";
echo rand_float(0.5,0.6)."\n";