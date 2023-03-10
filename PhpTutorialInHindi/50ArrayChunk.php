<?php
$age = array(
    "Mohan" => "35",
    "Aman" => "37",
    "Ram" => "43",
    "Salman" => "25");
$newArray = array_chunk($age, 3, true);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

