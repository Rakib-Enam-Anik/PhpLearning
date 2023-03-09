<?php

$color =["red","green","blue","yellow","brown"];

$fruit = ["Orange", "Apple"];

array_splice($color,2,2,$fruit);

echo "<pre>";
print_r($color);
echo "</pre>";

?>