<?php
include 'db.php';

echo '<form method="GET">
    1. Возраст ОТ 25 (не вкл.) ДО 28 (вкл.): <input type="submit" name="task1" value="Выполнить"><br>
    2. Информация о студентах N и M (через запятую): <input type="text" name="task2"> <input type="submit" value="Выполнить"><br>
    3. Информация о всех студентах, кроме N: <input type="text" name="task3"> <input type="submit" value="Выполнить"><br>
    4. Возраст N лет ИЛИ баллы = M (через запятую): <input type="text" name="task4"> <input type="submit" value="Выполнить"><br>
    5. Возраст от 23 до 27 лет И баллы от 400 до 800: <input type="submit" name="task5" value="Выполнить"><br>
</form><hr>';

$sql = "";

if (isset($_GET['task1'])) {
    $sql = "SELECT * FROM students WHERE age > 25 AND age <= 28";
}

if (!empty($_GET['task2'])) {
    $parts = explode(',', $_GET['task2']);
    $n = trim($parts[0]);
    $m = isset($parts[1]) ? trim($parts[1]) : '';
    $sql = "SELECT * FROM students WHERE name = '$n' OR name = '$m'";
}

if (!empty($_GET['task3'])) {
    $name = $conn->real_escape_string($_GET['task3']);
    $sql = "SELECT * FROM students WHERE name != '$name'";
}

if (!empty($_GET['task4'])) {
    $parts = explode(',', $_GET['task4']);
    $n = intval($parts[0]);
    $m = isset($parts[1]) ? intval($parts[1]) : 0;
    $sql = "SELECT * FROM students WHERE age = $n OR bal = $m";
}

if (isset($_GET['task5'])) {
    $sql = "SELECT * FROM students WHERE (age >= 23 AND age <= 27) AND (bal >= 400 AND bal <= 800)";
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