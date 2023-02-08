<?php
/*
Write a PHP script that inserts a new item in an array in any position.
*/

$original = array( '1', '2', '3', '4', '5');

echo "Orginar array";
foreach($original as $o){
    echo $o;
}
echo "<br/> after inserting $ array ";
$insert = array_splice($original,2,0,'$');
foreach($original as $o){
    echo $o;
}