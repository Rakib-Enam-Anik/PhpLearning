<?php
$str = "Rakib Enam";

$array = str_split($str);

$newStr = chunk_split($str, 2, "..");

echo "<pre>";
print_r($array);
echo "</pre>";

echo $newStr;
