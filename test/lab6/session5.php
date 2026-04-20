<?php
session_start();
if (!isset($_SESSION['t'])) $_SESSION['t'] = time();
echo "Вы зашли " . (time() - $_SESSION['t']) . " сек. назад";
?>