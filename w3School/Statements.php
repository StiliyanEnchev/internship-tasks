
<?php

// Constants //
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;

// array as constant //
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);

echo cars[0];
   

// statements //

$x = 5;
if ($x > 3) {
  echo "Have a good day!";
} elseif ($x == 3) {
  echo "Have a nice day!";
  } else {
  echo "Have a bad day!";
}

// PHP Shorthand if Statements //
$a = 5;

if ($a < 10) $b = "Hello";
// or //
echo ($a > 3) ? "Have a good day!" : "Have a bad day!";

// switch statement //

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>