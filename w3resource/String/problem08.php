<?php
/*
Write a PHP script to extract the user name from the following email ID.
Sample String : 'rayy@example.com'
Expected Output : 'rayy'
*/

$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
