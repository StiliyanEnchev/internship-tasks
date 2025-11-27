<?php 

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


// casting - changing a variable from one type to another //
$x = 5;
$x = (string) $x;
var_dump($x);


?>