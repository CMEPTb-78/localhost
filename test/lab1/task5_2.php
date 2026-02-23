<?php
    $count = 150;
    $countString = (string)$count;
    echo "До: ", var_dump($count), "<br>";
    echo "После: ", gettype($countString) . " " . $countString;