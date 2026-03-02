<?php
    $counter = 0;
    $nado = 0;
    for ($i = 100000; $i < 1000000; $i++) {
        $istr = (string) $i;
        if ((int) $istr[0] + (int) $istr[1] + (int) $istr[2] == (int) $istr[3] + (int) $istr[4] + (int) $istr[5]) {
            $counter++;
            if ($nado <= 200 ) {
                echo $i , "\n";
                $nado++;
            } 
        }
    }
    $res = $counter * 1; 
    echo $res,'<br>';
    echo ($res / 900000) * 100;