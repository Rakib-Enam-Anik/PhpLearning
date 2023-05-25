<?php
//Write a PHP script to generate random 11 characters string of letters and numbers.
$x = rand(10e12, 10e16);
echo base_convert($x, 10, 36)."\n";
?>