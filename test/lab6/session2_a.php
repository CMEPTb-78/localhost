<?php
session_start();

if (!empty($_POST['user_text'])) {
    $_SESSION['task2'] = $_POST['user_text'];
    echo "Текст сохранен! <a href='session2_b.php'>Перейти на другую страницу</a>";
}
?>
<form method="POST">
    Введите произвольный текст: 
    <input type="text" name="user_text">
    <input type="submit" value="Записать в сессию">
</form>