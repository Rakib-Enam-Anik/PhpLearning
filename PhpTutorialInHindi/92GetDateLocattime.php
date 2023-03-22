<?php

/*
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

$date = gettimeofday();
echo $date(true);
*/
$olddate = mktime(0,0,0,03,15,2015);
echo "<pre>";
print_r(localtime($olddate,true));
echo "</pre>";

?>