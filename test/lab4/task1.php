<?php
class SimpleClass {
    const VALUE_CONST = 10;
    public $property = 20;

    public function showMessage() {
        echo "Метод класса вызван успешно!<br>";
    }
}

$obj = new SimpleClass();
$obj->showMessage();

// Вывод суммы константы и свойства
echo "Сумма константы и свойства: " . (SimpleClass::VALUE_CONST + $obj->property) . "<br>";
?>