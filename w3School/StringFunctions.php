<?php

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

?>