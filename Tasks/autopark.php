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
        parent::__construct($brand, $model, $fuelConsumption);        
        $this->seats = $seats;
    }
}

class Truck extends Vehicle{
    public $max_capacity;

    public function __construct($brand, $model, $fuelConsumption, $max_capacity) {
        parent::__construct($brand, $model, $fuelConsumption);        
        $this->max_capacity = $max_capacity;
    }
}

class FleetManager {
    private $vehicles = [];


    public function run() {
        $running = true;

        while ($running) {
            echo "1. Add new vehicle\n";
            echo "2. Show all vehicles\n";
            echo "3. Calculate average fuel consumption\n";
            echo "4. Filter by vehicle type\n";
            echo "5. Exit\n";
            echo "Choose option: "; 
                
            $choice = trim(fgets(STDIN));

            switch ($choice) {
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    break;
                case 4:
                    break;
                case 5:
                    $running = false;
                    echo "Program ended by the user";
                    break;
            }
        }
    }  
}

$fleet = new FleetManager();
$fleet->run()




?>

</head>
<body>
    