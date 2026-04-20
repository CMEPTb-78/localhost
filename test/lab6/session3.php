<?php
session_start();
if (!isset($_SESSION['cnt'])) {
    $_SESSION['cnt'] = 0;
    echo "Вы еще не обновляли страницу.";
} else {
    $_SESSION['cnt']++;
    echo "Обновлений: " . $_SESSION['cnt'];
}
?>