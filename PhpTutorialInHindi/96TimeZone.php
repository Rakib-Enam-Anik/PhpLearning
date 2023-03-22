<?php

date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();

$tz = timezone_open("Asia/Dhaka");
echo timezone_name_get($tz);

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

?>