<?php
/*
Write a PHP script to split the following string.
Sample string : '082307'
Expected Output : 08:23:07
*/

$str1= '082307';
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>