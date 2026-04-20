<?php
if (!isset($_COOKIE['test'])) {
    setcookie('test', 'Текст в куки');
} else {
    echo $_COOKIE['test'];
}
?>