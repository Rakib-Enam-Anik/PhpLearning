<?php
/*
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by key
c) descending order sorting by value
d) descending order sorting by key

*/

$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($array2);
foreach($array2 as $y=>$y_value){
    echo "Age of ".$y." is : ". $y_value."";
}