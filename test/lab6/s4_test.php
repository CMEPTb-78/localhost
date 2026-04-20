<?php
session_start();
echo $_SESSION['c'] ?? "Страна не введена";
?>