<?php

function compare($a,$b){
    if($a == $b){
        return 0;
    }
    return ($a > $b)? 1 : -1;
}

$a1 = array("a"=>"Red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"Red","f"=>"green","d"=>"purple");

$newArray = array_intersect($a1, $a2, "compare");

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>