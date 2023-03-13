<?php
$firstname = "Rakib";
$lastname = "Enam";
$age = "26";
$gender = "Male";
$country = "Bangladesh";

$extra = ["gender", "country"];

$newArray = compact("firstname", "lastname", "age", $extra);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>