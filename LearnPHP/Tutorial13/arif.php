<?php
function hello($fname="First",$lname="Last"){
    $v =  "$fname $lname";

    return $v;
}

$name = hello("Rakib","Enam");

echo $name;


?>