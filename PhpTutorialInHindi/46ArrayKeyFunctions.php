<?php

$color =[
    "first" => "red",
    "second" => "green",
    "third" => "blue",
    "fourth" => "yellow"
];

$newArray = Key_exists("first",$color);

if($newArray){
    echo "Key exists!";
}else{
    echo "Key does not exist";
}
?>