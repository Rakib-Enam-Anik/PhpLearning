<?php
// Write a PHP script to get the largest key in an array.
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels");
$max_key = max( array_keys($ceu));
echo $max_key."\n";
?>