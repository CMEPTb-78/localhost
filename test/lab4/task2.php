<?php
class BasketCalculator {
    const BASKETS_COUNT = 9;
    public $capacity;
    public function calculateTotalWeight($capacity) {
        return self::BASKETS_COUNT * $capacity;
    }
}
$basket = new BasketCalculator();
echo "Количество корзин: " . BasketCalculator::BASKETS_COUNT . "<br>";
$basket->capacity = 5; 
echo "Общая масса яблок: " . $basket->calculateTotalWeight($basket->capacity) . " кг<br>";
?>