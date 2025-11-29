<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $running = true;

    abstract class Vehicle
    {
        public $brand;
        public $model;
        public $fuelConsumption;

        public function __construct($brand, $model, $fuelConsumption)
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->fuelConsumption = $fuelConsumption;
        }
    }

    class Car extends Vehicle
    {
        public $seats;

        public function __construct($brand, $model, $fuelConsumption, $seats)
        {
            parent::__construct($brand, $model, $fuelConsumption);
            $this->seats = $seats;
        }

        public function name()
        {
            return get_class($this) . ": " . $this->brand . " " . $this->model . " (Seats: " . $this->seats . ")";
        }
    }

    class Truck extends Vehicle
    {
        public $max_capacity;

        public function __construct($brand, $model, $fuelConsumption, $max_capacity)
        {
            parent::__construct($brand, $model, $fuelConsumption);
            $this->max_capacity = $max_capacity;
        }

        public function name()
        {
            return get_class($this) . ": " . $this->brand . " " . $this->model . " (Capacity: " . $this->max_capacity . "kg)";
        }
    }

    class FleetManager
    {
        public $vehicles = [];

        public function add_new_vehicle($type)
        {
            echo "Enter brand: ";
            $brand = trim(fgets(STDIN));

            echo "Enter model: ";
            $model = trim(fgets(STDIN));

            echo "Enter fuel consumption: ";
            $fuelConsumption = trim(fgets(STDIN));

            if ($type == 1) {
                echo "Enter seats: ";
                $seats = trim(fgets(STDIN));
                $vehicle = new Car($brand, $model, $fuelConsumption, $seats);
            } elseif ($type == 2) {
                echo "Enter max capacity: ";
                $max_capacity = trim(fgets(STDIN));
                $vehicle = new Truck($brand, $model, $fuelConsumption, $max_capacity);
            } else {
                echo "Unknown type!\n";
                return;
            }

            $this->vehicles[] = $vehicle;
            echo "Vehicle added!\n";
        }

        public function display_all_vehicles()
        {
            foreach ($this->vehicles as $vehicle) {
                echo $vehicle->name() . "\n";
            }
        }

        public function fuel_consumption()
        {
            if (count($this->vehicles) === 0) {
                echo "No vehicles to calculate consumption.\n";
                return;
            }

            $total_consumption = 0;
            foreach ($this->vehicles as $vehicle) {
                $total_consumption += $vehicle->fuelConsumption;
            }

            $average = $total_consumption / count($this->vehicles);
            echo "Average fuel consumption is: $average\n";
        }

        public function get_filtered_vehicles($type)
        {
            foreach ($this->vehicles as $vehicle) {
                if (($type == 1 && $vehicle instanceof Car) ||
                    ($type == 2 && $vehicle instanceof Truck)
                ) {
                    echo $vehicle->name() . "\n";
                }
            }
        }
    }

    $fleet = new FleetManager();

    while ($running) {
        echo "\n1. Add new vehicle\n";
        echo "2. Show all vehicles\n";
        echo "3. Calculate average fuel consumption\n";
        echo "4. Filter by vehicle type\n";
        echo "5. Exit\n";
        echo "Choose option: ";

        $choice = trim(fgets(STDIN));

        switch ($choice) {
            case 1:
                echo "Type 1 for Car or 2 for Truck: ";
                $type = trim(fgets(STDIN));
                if ($type != 1 && $type != 2) {
                    echo "Type not allowed\n";
                    break;
                }
                $fleet->add_new_vehicle($type);
                break;

            case 2:
                $fleet->display_all_vehicles();
                break;

            case 3:
                $fleet->fuel_consumption();
                break;

            case 4:
                echo "Type 1 for Car or 2 for Truck: ";
                $type = trim(fgets(STDIN));
                if ($type != 1 && $type != 2) {
                    echo "Type not allowed\n";
                    break;
                }
                $fleet->get_filtered_vehicles($type);
                break;

            case 5:
                $running = false;
                echo "Program ended by the user\n";
                break;

            default:
                echo "Invalid choice!\n";
        }
    }

    ?>
</head>

<body>
</body>

</html>