<?php

function square($n){
    return strtoupper($n);
}


$a  =array("one" => "Apple", "two" => "Banana", "three" => "Orange");

$newArray = array_map('square', $a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>