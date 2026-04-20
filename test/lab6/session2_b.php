<?php
session_start();

if (isset($_SESSION['task2'])) {
    echo "Текст, полученный с первой страницы: " . $_SESSION['task2'];
} else {
    echo "Сессия пуста. Вернитесь назад и введите текст.";
}
?>
<br>
<a href="index.php">Вернуться в меню</a>