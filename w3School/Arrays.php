<?php

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
?>