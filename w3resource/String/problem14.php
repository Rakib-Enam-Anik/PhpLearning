<?php
/*
Write a PHP script to print the next character of a specific character.
Sample character : 'a'
Expected Output : 'b'
*/
$cha = 'a';
$next_cha = ++$cha;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if(strlen($next_cha) > 1)
{
    $next_cha = $next__cha[0];
}
echo $nnext_cha."\n";
?>