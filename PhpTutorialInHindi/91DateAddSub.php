<?php
$date = date_ceate("2015-05-15");

date_add($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d-m-Y");

date_sub($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d-m-Y");


date_modify($date, date_interval_create_from_date_string("-10 days"));
echo date_format($date, "d-m-Y");

?>