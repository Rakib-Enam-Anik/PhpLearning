<?php
/* Write a PHP script that removes the last word from a string.
Sample string : 'The quick brown fox'
Expected Output : The quick brown
*/

$str1 = 'The quick brown fox';
echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."\n";
?>