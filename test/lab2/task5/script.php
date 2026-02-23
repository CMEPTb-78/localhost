<?php
    $counter = 0;
    for ($i = 100000; $i < 1000000; $i++) {
        $istr = (string) $i;
        if ((int) $istr[0] + (int) $istr[1] + (int) $istr[2] == (int) $istr[3] + (int) $istr[4] + (int) $istr[5]) {
            $counter++;
        }
    }
    $res = $counter * 10000; 
    echo $res,'<br>';
    echo ($res / 9000000000) * 100;