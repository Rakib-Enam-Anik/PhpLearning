<?php
/*
Write a PHP script to find the first character that is different between two strings.
String1 : 'football'
String2 : 'footboll'
Expected Result : First difference between two strings at position 5: "a" vs "o"
*/

$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>