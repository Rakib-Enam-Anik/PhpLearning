//Array Combine uses in index array.

<?php

$name = array("Ram","Mohon","Salman");

$age = array("35","37","43");

$newArray = array_combine($name,$age);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>