<?php
include 'db.php';

echo '<form method="POST">
    1. Удалить студента с id=N: <input type="number" name="task1"> <input type="submit" value="Выполнить"><br>
    2. Удалить студента с именем N: <input type="text" name="task2"> <input type="submit" value="Выполнить"><br>
    3. Удалить всех студентов, возраст которых N лет: <input type="number" name="task3"> <input type="submit" value="Выполнить"><br>
    4. Очистить таблицу students: <input type="submit" name="task4" value="Выполнить">
</form><hr>';

if (!empty($_POST['task1'])) {
    $n = intval($_POST['task1']);
    $conn->query("DELETE FROM students WHERE id = $n");
    echo "Запись удалена.";
}

if (!empty($_POST['task2'])) {
    $n = $conn->real_escape_string($_POST['task2']);
    $conn->query("DELETE FROM students WHERE name = '$n'");
    echo "Запись удалена.";
}

if (!empty($_POST['task3'])) {
    $n = intval($_POST['task3']);
    $conn->query("DELETE FROM students WHERE age = $n");
    echo "Записи удалены.";
}

if (isset($_POST['task4'])) {
    $conn->query("DELETE FROM students");
    $conn->query("ALTER TABLE students AUTO_INCREMENT = 1");
    $sql_reset = "INSERT INTO students (name, age, bal) VALUES 
        ('Дима', 23, 400),
        ('Петя', 25, 500),
        ('Вася', 23, 500),
        ('Коля', 30, 1000),
        ('Иван', 27, 500),
        ('Кирилл', 28, 1000)";

    if ($conn->query($sql_reset)) {
        echo "Таблица возвращена в исходное состояние.";
    }
}