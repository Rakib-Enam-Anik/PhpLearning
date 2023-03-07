<?php
$emp = [
    [1, "Krishana", "Manager", 50000 ],
    [2, "Salman", "Salesman", 200000],
    [3, "Mohan", "Computer Operator", 12000],
    [4, "Amir", "Driver", 5000]
];


foreach($emp as list($id,$name,$designation,$salary)){
    echo "$id $name $designation $salary";
}
?>