<?php

echo "Time & Date : " . date("d-m-Y h:i:sa") . "<br><br>";

echo date("d-m-Y h:i:sa", mktime(0,0,0,10,  15, 2023));

echo date("d-m-Y h:i:sa", gmmktime(0,0,0,10,  15, 2023));

?>