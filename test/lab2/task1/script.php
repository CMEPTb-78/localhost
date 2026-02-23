<?php
    $n = $_GET['n'];
    if($n <= 0) {
        echo "Число n некоректное";
    } else {
        for($i = 1; $i <= $n; $i++) {
            echo "Hello", "<br>";
        }
    }