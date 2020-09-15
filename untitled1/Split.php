<?php
$Number = 1234;
$String = "ThanhTai";
$DoB = "09/05/2000";

$Split = explode('/', $DoB);
$Day = $Split[0];
$Month = $Split[1];
$Year = $Split[2];

echo $Day . ' và ' . $Month . ' và ' . $Year;
