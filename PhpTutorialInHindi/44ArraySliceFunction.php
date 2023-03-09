<?php
$color = ["0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown"];

$newArray = array_slice($color, 1, 3);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>