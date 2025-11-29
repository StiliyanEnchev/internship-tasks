<?php
// Set Time Zone //
date_default_timezone_set("Europe/Sofia");


// PHP Date and Time //
echo "Today is " . date("Y-m-d-l") . "\n";
echo "Today is " . date("H-h-i-s-a") . "\n";

// Create a Date //

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "\n";


// Create a Date from String //
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "\n";



?>


