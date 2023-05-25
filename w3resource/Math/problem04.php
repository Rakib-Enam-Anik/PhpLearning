<?php
// Write a PHP script to convert scientific notation to an int and a float.
$val = '4.5e3';
$ival = (int) $val;
$fval = (float) $val;
echo $ival."\n";
echo $fval."\n";
?>