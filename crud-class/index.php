<?php

include 'database.php';

$obj = new Database();

/*
$obj->insert('students',['student_name'=>'Sahin Mahmud','age'=>'28','city'=>'Soriothpur']);
echo "Insert result is : ";
print_r($obj->getResult());
*/

$obj->update('students',['student_name'=>'Emon Rahman','age'=>'28','city'=>'Potuakhali'], 'id="1"');

//multiple change
//$obj->update('students',['city'=>'Potuakhali'], 'city="Dhaka"');
echo "Update result is : ";
print_r($obj->getResult());

?>