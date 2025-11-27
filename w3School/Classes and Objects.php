<?php
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
?>