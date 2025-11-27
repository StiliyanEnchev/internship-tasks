<!DOCTYPE html>
<html>
<body>

<h1>>Tutorial</h1>

<?php // php tag //

// printing text //
echo "Hello World!";

// variables //
$color = 'black';

// printing variable //
echo "My car is " . $color . "<br>";

/* 
PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
 */

// get type and value of a variable //
var_dump($color);

// multiple assignments //
$x = $y = $z = "Fruit";

/*
PHP has three different variable scopes:

local - accesible only where it is declared
global - accessible from any part of the code
static - retains the value even after the scope is exited
*/

// echo can contain html tags //
$txt1 = "Learn PHP in 2024!";
echo "<h2>$txt1</h2>";

// defining a class //

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

// creating an object //
$myCar = new Car("black", "Volvo");

// casting - changing a variable from one type to another //
$x = 5;
$x = (string) $x;
var_dump($x);

// string functions //
$x = "Hello world! <br>";
echo strlen($x);
echo str_word_count($x);
echo strpos($x, "world");
echo str_replace("world", "Dolly", $x);
echo strtoupper($x);
echo strtolower($x);
echo strrev($x);
echo trim($x);

// Split the string at each space into an array:
$y = explode(" ", $x);
// function to display the result:
print_r($y);

// return part of a string //
echo substr($x, 6, 5);
echo substr($x, 6);
echo substr($x, -5, 3);

// check variable type if is int/float etc//
var_dump(is_int($x));
var_dump(is_float($x));
// var_dump(is_infinite($x));
var_dump(is_numeric($x));

# The (int), (integer), and intval() 
# functions are often used to convert a value to an integer.

$int_cast = (int)$x;
$str_cast = (string)$int_cast;
$bool_cast = (bool)$int_cast;
$float_cast = (float)$int_cast;
$array_cast = (array)$int_cast;
$object_cast = (object)$int_cast;

// Math Functions //
echo(pi());
echo(min(0, 150, 30, 20, -8, -200));;
echo(max(0, 150, 30, 20, -8, -200));;
echo(abs(-6.7));;
echo(sqrt(64));;        
echo(round(0.60));;
echo(rand());
echo(rand(10, 100));

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


// Loops //

for ($i = 0; $i < 5; $i++) {
  echo "The number is: $i <br>";
}

while ($i < 10) {
  echo "The number is: $i <br>";
  $i++;
}

$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);


$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

// Arrays // 

// Assiing values to an array //
$fruits = array("Orane", "Banana");
array_push($fruits, "Orange", "Kiwi", "Lemon");

// multiple add to an associative array //
$cars = array("Volvo"=>"XC90", "BMW"=>"X5");
$cars += ["color" => "red", "year" => 1964];

// remove element from an array //
array_splice($cars, 1, 2);

// remove element by key without changing other el. keys//
unset($cars[0], $cars[1]);
unset($cars["Volvo"]);

// returns new array without the specified value //
$newarray = array_diff($cars, ["XC90"]);

// remove last element of an array //
array_pop($cars);

// remove first element of an array //
array_shift($cars);

/* sorting arrays 

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

*/

// Two-dimensional Arrays //
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}


/* Superglobals 

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/


?>
</body>
</html>
