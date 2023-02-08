<?php
/*
Write a PHP script to get the shortest/longest string length from an array.

Sample arrays : ("abcd","abc","de","hjj","g","wer");

*/

$my_array = array("abcd","abc","de","hjj","g","wer");
$new = array_map('strlen',$my_array);
echo max($new);