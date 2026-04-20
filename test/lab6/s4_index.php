<?php
session_start();
if (!empty($_POST['c'])) $_SESSION['c'] = $_POST['c'];
?>
<form method="POST"><input type="text" name="c"><input type="submit"></form>
<a href="s4_test.php">Посмотреть результат</a>