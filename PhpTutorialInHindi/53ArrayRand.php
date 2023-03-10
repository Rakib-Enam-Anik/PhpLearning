<?php
$color = array("red","green","blue","yellow","brown");

$newArray = array_rand($color, 2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $color[$newArray[0]] . "<br>";
echo $color[$newArray[1]];

$newArray1 = shuffle($color);

echo "<pre>";
print_r($color);
echo "</pre>";



?>