<?php
include 'db.php';

echo '<form method="GET">
    1. Вывести информацию о студенте с id = N: <input type="number" name="task1"> <input type="submit" value="Выполнить"><br>
    2. Вывести информацию о студентах набравших N баллов: <input type="number" name="task2"> <input type="submit" value="Выполнить"><br>
    3. Вывести информацию о студентах в возрасте N лет: <input type="number" name="task3"> <input type="submit" value="Выполнить"><br>
    4. Вывести информацию о студентах, набравших N и более баллов: <input type="number" name="task4"> <input type="submit" value="Выполнить"><br>
    5. Вывести информацию о студентах, не набравших N баллов (меньше N): <input type="number" name="task5"> <input type="submit" value="Выполнить"><br>
    6. Вывести информацию о количестве баллов и возраст студента с именем N: <input type="text" name="task6"> <input type="submit" value="Выполнить"><br>
</form><hr>';

$sql = "";

if (!empty($_GET['task1'])) {
    $n = intval($_GET['task1']);
    $sql = "SELECT * FROM students WHERE id = $n";
}

if (!empty($_GET['task2'])) {
    $n = intval($_GET['task2']);
    $sql = "SELECT * FROM students WHERE bal = $n";
}

if (!empty($_GET['task3'])) {
    $n = intval($_GET['task3']);
    $sql = "SELECT * FROM students WHERE age = $n";
}

if (!empty($_GET['task4'])) {
    $n = intval($_GET['task4']);
    $sql = "SELECT * FROM students WHERE bal >= $n";
}

if (!empty($_GET['task5'])) {
    $n = intval($_GET['task5']);
    $sql = "SELECT * FROM students WHERE bal < $n";
}

if (!empty($_GET['task6'])) {
    $name = $conn->real_escape_string($_GET['task6']);
    $sql = "SELECT bal, age FROM students WHERE name = '$name'";
}

if ($sql != "") {
    $res = $conn->query($sql);
    if ($res && $res->num_rows > 0) {
        echo "<table border='1'><tr>";
        while ($finfo = $res->fetch_field()) {
            echo "<th>{$finfo->name}</th>";
        }
        echo "</tr>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Записи не найдены.";
    }
}
?>