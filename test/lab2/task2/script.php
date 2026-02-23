<?php
    $n = $_GET['n'];
    $res = 0;
    for ($i = 0; $i <= 1000; $i += $n) {
        $res += $i;
        echo $i, "<br>";
    }
    echo $res;