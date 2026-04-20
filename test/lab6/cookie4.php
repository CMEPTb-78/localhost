<?php
if (!empty($_POST['d'])) setcookie('d', $_POST['d'], time() + 3600*24*30);
if (isset($_COOKIE['d'])) {
    $now = strtotime(date('Y-m-d'));
    $bday = strtotime(date('Y') . '-' . date('m-d', strtotime($_COOKIE['d'])));
    if ($bday < $now) $bday = strtotime('+1 year', $bday);
    $diff = ($bday - $now) / 86400;
    echo ($diff == 0) ? "С днем рождения!" : "Осталось дней: $diff";
}
?>
<form method="POST"><input type="date" name="d"><input type="submit"></form>