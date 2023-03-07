<?php

$emp = [
    [1, "Krishana","Manager",50000],
    [2,"Salman","Salesman",20000],
    [3,"Mohan","Computer Operator",12000],
    [4,"Amir","Driver",5000]
];

foreach($emp as $v1){
    foreach($v1 as $v2){
        echo $v2 . " ";
    }
    echo "<br>";
}
?>