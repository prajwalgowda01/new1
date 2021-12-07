<?php
var_dump(checkdate(12,31,2020));
echo "<br>";
var_dump(checkdate(11,31,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
?>

//The date_add() function adds some days, months, years, hours, minutes, and seconds to a date.

<?php
$date=date_create("2013-03-15");
date_add($date,date_interval_create_from_date_string("2 days"));
echo date_format($date,"Y-m-d");
?>

//date format

<?php
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"Y/M/d");
?>

//date create

<?php
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d");
?>

//date_date_set

<?php
$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
?>

//
