<?php
abstract class Car {
    abstract protected function return_car_name();
    abstract protected function return_car_price();

    public function return_year($year) {
        return "Год выпуска авто: {$year}";
    }
}

class BmwCar extends Car {
    public function return_car_name() { return "BMW"; }
    public function return_car_price() { return 50000; }
}

class FordCar extends Car {
    public function return_car_name() { return "Ford"; }
    public function return_car_price() { return 30000; }
}

$bmw = new BmwCar();
echo $bmw->return_car_name() . " - " . $bmw->return_car_price() . ". " . $bmw->return_year(2023) . "<br>";

$ford = new FordCar();
echo $ford->return_car_name() . " - " . $ford->return_car_price() . ". " . $ford->return_year(2021) . "<br>";
?>