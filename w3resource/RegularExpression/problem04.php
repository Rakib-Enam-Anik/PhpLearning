<?php
/*
Write a PHP script to remove nonnumeric characters except comma and dot. 
Sample string : '$123,34.00A'
Expected Output : 12,334.00
*/

$str1 = "$12,334.00A";
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
?>