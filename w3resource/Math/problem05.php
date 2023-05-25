<?php
// Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy. 
// Sample floating value : 0.0456
// Expected Output :
// Exponent part : -4
// Mantissa part : 0.7296

$odate = "2012-09-12";
$newDate = date("d-m-Y", strtotime($odate));
echo $newDate."\n";
?>