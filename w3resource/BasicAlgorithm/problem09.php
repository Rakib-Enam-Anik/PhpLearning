<?php
// Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more. 

<?php
function test($str) 
{
   $s = substr($str, strlen($str) - 1);
      return $s.$str.$s;
   
}

echo test("Red")."\n";
echo test("Green")."\n";
echo test("1")."\n";