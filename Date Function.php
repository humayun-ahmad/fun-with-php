<?php
// For date
echo "Today ".date("d/m/y");
echo "<br>";
echo "Today ".date("d-m-y");
echo "<br>";
echo "Today ".date("d.m.y");
echo "<br>";

// For Time
date_default_timezone_set("asia/dhaka");
echo date("h/i/a");
echo "<br>";
// For Day
echo date('l');
echo "<br>";

echo "<br>";

?>