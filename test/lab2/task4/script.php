<?php
    $n = $_GET['n'];
    echo '<table>';
    for ($i = 0; $i < $n; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $n; $j++) {
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);
            echo "<td style='background-color: rgb($red, $green, $blue); width: 64px; height: 64px;'>";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';