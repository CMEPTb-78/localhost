<?php
include 'db.php';

echo '<form method="POST">
    1. Имя, Возраст, Баллы (через запятую): <input type="text" name="task1"> <input type="submit" value="Выполнить"><br>
    2. Добавить двух студентов (Дима 30/900 и Петр 31/500): <input type="submit" name="task2" value="Выполнить">
</form><hr>';

if (!empty($_POST['task1'])) {
    $parts = explode(',', $_POST['task1']);
    $name = trim($parts[0]);
    $age = isset($parts[1]) ? intval($parts[1]) : 0;
    $bal = isset($parts[2]) ? intval($parts[2]) : 0;
    $conn->query("INSERT INTO students (name, age, bal) VALUES ('$name', $age, $bal)");
    echo "Запись добавлена.";
}

if (isset($_POST['task2'])) {
    $conn->query("INSERT INTO students (name, age, bal) VALUES ('Дима', 30, 900), ('Петр', 31, 500)");
    echo "Две записи добавлены.";
}
?>