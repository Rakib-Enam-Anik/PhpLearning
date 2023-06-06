<?php
/*
 Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5
*/

$original = array( '1', '2', '3', '4', '5');
echo 'Original array: '."\n";
foreach ($original as $x)
{echo "$x ";}
$interested = '$';
array_splice($original, 3, $interested);
echo "\n After interesting '$' the array is : "."\n";
foreach ($original as $x)
{echo "$x";}
echo "\n"
?>