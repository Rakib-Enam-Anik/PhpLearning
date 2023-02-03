<?php

include 'database.php';

$obj = new Database();

/*
$obj->insert('students',['student_name'=>'Sahin Mahmud','age'=>'28','city'=>'Soriothpur']);
echo "Insert result is : ";
print_r($obj->getResult());
*/

//$obj->update('students',['student_name'=>'Emon Rahman','age'=>'28','city'=>'Potuakhali'], 'id="1"');

//multiple change
//$obj->update('students',['city'=>'Potuakhali'], 'city="Dhaka"');
//echo "Update result is : ";
//print_r($obj->getResult());

//$obj->delete('students','age="20"');
//echo "Delete result is : ";
//print_r($obj->getResult());

//$obj->sql('SELECT * FROM students ');
//echo "SQL result is : ";
//print_r($obj->getResult());

//$obj->select('students', '*', null,'city= "Potuakhali"',null,null);
//echo " SQL result is : ";
//print_r($obj->getResult());

//$obj->select('students', 'id,student_name',null,null,null,4);
//echo " SQL result is : ";
//print_r($obj->getResult());

$obj->select('students', '*',null,null,null,3);
echo "\n\nSelect  result is : ";
print_r($obj->getResult());

echo $obj->pagination('students', null,null,3);

//echo " SQL result is : ";
//print_r($obj->getResult());

?>