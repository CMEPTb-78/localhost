<?php
include 'db.php';

echo '<form method="POST">
    1. Изменить студенту N баллы на M (через запятую): <input type="text" name="task1"> <input type="submit" value="Выполнить"><br>
    2. Изменить студенту с id=N возраст M лет (через запятую): <input type="text" name="task2"> <input type="submit" value="Выполнить"><br>
    3. Всем студентам с баллами N прибавить 100: <input type="number" name="task3"> <input type="submit" value="Выполнить"><br>
    4. Студентам с id от 3 до 5 поставить возраст 20: <input type="submit" name="task4" value="Выполнить">
</form><hr>';

if (!empty($_POST['task1'])) {
    $parts = explode(',', $_POST['task1']);
    $n = trim($parts[0]);
    $m = isset($parts[1]) ? intval($parts[1]) : 0;
    $conn->query("UPDATE students SET bal = $m WHERE name = '$n'");
    echo "Данные обновлены.";
}

if (!empty($_POST['task2'])) {
    $parts = explode(',', $_POST['task2']);
    $n = intval($parts[0]);
    $m = isset($parts[1]) ? intval($parts[1]) : 0;
    $conn->query("UPDATE students SET age = $m WHERE id = $n");
    echo "Данные обновлены.";
}

if (!empty($_POST['task3'])) {
    $n = intval($_POST['task3']);
    $conn->query("UPDATE students SET bal = bal + 100 WHERE bal = $n");
    echo "Баллы обновлены.";
}

if (isset($_POST['task4'])) {
    $conn->query("UPDATE students SET age = 20 WHERE id >= 3 AND id <= 5");
    echo "Возраст обновлен для группы студентов.";
}
?>