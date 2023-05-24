<?php
/* Write a PHP script that removes the whitespaces from a string. Go to the editor
Sample string : 'The quick " " brown fox'
Expected Output : Thequick""brownfox
*/

$str1 = 'The quick " " brown fox';
echo preg_replace('/\s+/', '', $str1)."\n";
?>