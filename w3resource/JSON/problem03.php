<?php
//Write a PHP script to get JSON representation of a value from an array.
$arra = array("uglify-js"=> "1.3.4", "jshint"=> "0.9.1", "recess"=> "1.1.8" ,"connect"=> "2.1.3", "hogan.js"=>"2.0.0"); 
$myarray = array('red', 'green', 'white');

var_dump(json_encode($arra));
echo "\n";
var_dump(json_encode($myarray));
?>