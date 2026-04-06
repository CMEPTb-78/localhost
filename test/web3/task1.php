<?php
function showArguments(...$items) {
    echo "Список аргументов:<br>";
    foreach ($items as $item) {
        echo "- " . $item . "<br>";
    }
}

showArguments("Первая строка", "Вторая строка", 42);
?>