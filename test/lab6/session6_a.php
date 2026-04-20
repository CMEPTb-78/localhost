<?php
session_start();
if (!empty($_POST['e']))
    $_SESSION['e'] = $_POST['e'];
?>
<form method="POST"><input type="email" name="e"><input type="submit"></form>
<a href="session6_b.php">Открыть форму с email</a>