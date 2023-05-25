<?php
//Write a PHP script to get the information regarding memory usage in KB or MB etc.
$memory_size = memory_get_usage();
$memory_until = array('Bytes','KB','MB','GB','TB','PB');
//Display memory size into kb, mb etc.
echo 'Used Memory : ' . round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).''.$memory_uit[$x]."\n";
?>