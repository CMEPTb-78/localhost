<?php
    $isActive = 1;
    $isActiveBool = (bool)$isActive;
    echo var_dump($isActiveBool), '<br>';
    $isActive = 0;
    $isActiveBool = (bool)$isActive;
    echo var_dump($isActiveBool), '<br>';
    echo "Before: " . gettype($isActive), '<br>';
    echo "After: " . gettype($isActiveBool);