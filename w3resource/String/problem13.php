<?php
/*
Write a PHP script to get the filename component of the following path.
Sample path : "https://www.w3resource.com/index.php"
Expected Output : 'index'
*/
$path = 'www.example.com/public_html/index.php';
$file = basename($path, ".php");
echo $file."\n";
?>