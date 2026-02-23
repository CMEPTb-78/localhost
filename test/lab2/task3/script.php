<?php
    $n = $_GET['n'];
    for ($i = 0; $i <= 3000; $i++) {
        if ($i % $n == 0 && stripos((string)$i, "5")) {
            echo $i, "<br>";
        }
    }