<?php
$v = isset($_COOKIE['v']) ? $_COOKIE['v'] + 1 : 1;
setcookie('v', $v, time() + 3600*24);
echo "Вы посетили наш сайт $v раз!";
?>