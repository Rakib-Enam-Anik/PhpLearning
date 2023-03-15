<?php

$str = "Hello I am Rakib Enam";
echo $str . "<br>";

$newStr = addcslashes($str, "A...Z");


echo $newStr;

?>