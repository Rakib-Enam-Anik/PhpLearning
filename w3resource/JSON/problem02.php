<?php
/*
Write a PHP script to decode large integers.
Sample integer :
{"number": 123456789012345678901234567890}
*/

$json = '{"number": 123456789012345678901234567890}';
var_dump(json_decode($json));
?>