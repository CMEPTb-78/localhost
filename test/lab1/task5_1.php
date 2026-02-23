<?php
    $ageString = "30";
    $ageInt = (int)$ageString;
    echo "До ", gettype($ageString),'<br>', "После ", gettype($ageInt);