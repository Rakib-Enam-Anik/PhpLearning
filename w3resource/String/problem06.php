<?php
/*
Write a PHP script to format values in currency style.
Sample values : value1 = 65.45, value2 = 104.35
Expected Result : 169.80
*/

$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2)."\n";
?>
