<!DOCTYPE html>
<html lang="en">
<head>


<?php 

abstract class Vehicle {
    public $brand;
    public $model;
    public $fuelConsumption;

    public function __construct($brand, $model, $fuelConsumption) {
       $this->brand = $brand;
       $this->model = $model;
       $this->fuelConsumption = $fuelConsumption;

    }
}

class Car extends Vehicle {
    public $seats;

    public function __construct($brand, $model, $fuelConsumption, $seats) {
       $this->brand = $brand;
       $this->model = $model;
       $this->fuelConsumption = $fuelConsumption;
       $this->seats = $seats;
    }

    public function name () {
        return $this->model;
    }
}

class Truck extends Vehicle{
    public $max_capacity;

    public function __construct($brand, $model, $fuelConsumption, $max_capacity) {
       $this->brand = $brand;
       $this->model = $model;
       $this->fuelConsumption = $fuelConsumption;
       $this->max_capacity = $max_capacity;
    }
}

$newCar = new Car('PCarP', "Volvo", 22, 55);
$newTruck = new Truck('STruckS', "BMW", 90, 120);




?>

</head>
<body>
    