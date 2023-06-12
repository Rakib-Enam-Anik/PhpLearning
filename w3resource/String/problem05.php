<?php
/*
Write a PHP script to extract the file name from the following string.
Sample String : 'www.example.com/public_html/index.php'
Expected Output : 'index.php'
*/
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path,"/"),1);
$file_name = substr(strrchr($path,"/"), 1);
echo $file_name."\n"; //"index.php"
