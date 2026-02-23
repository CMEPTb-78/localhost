<?php
    $price = "19.99";
    $discount = 0.10;
    echo "Before: " . gettype($price), '<br>';
    $result = $price * (1 - $discount);
    echo var_dump($result), '<br>';
    echo "After: " . gettype($price);
     