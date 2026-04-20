<?php
session_start();
if (!isset($_SESSION['txt'])) {
    $_SESSION['txt'] = "Сессия активна";
} else {
    echo $_SESSION['txt'];
}
?>