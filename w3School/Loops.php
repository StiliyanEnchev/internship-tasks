<?php

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

?>