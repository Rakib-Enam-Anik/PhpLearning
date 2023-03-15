<?php

$str = "Hello";

echo "The String : " . $str . "<br><br>";

echo "md5 Binary : " . md5($str, TRUE) . "<br><br>";

echo "md5 HEX : " . md5($str) . "<br><br>";

echo "sha1 Binary : " . sha1($str, TRUE) . "<br><br>";

echo "sha1 HEX : " . sha1($str) . "<br><br>";

?>
