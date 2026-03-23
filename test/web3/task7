<?php
$refresh_rate = 5;
header("Refresh: $refresh_rate");

function displayTimeWithColor($refresh_rate) {
    $time = date('H:i:s');
    $second = date('s');
    
    if ($second < 15) $bg = "#ffcccc";
    elseif ($second < 30) $bg = "#ccffcc";
    elseif ($second < 45) $bg = "#ccccff";
    else $bg = "#ffffcc";

    echo "<div style='background-color:$bg; padding:20px; border:1px solid black;'>
            Текущее время: $time
          </div>";
    echo "<p>Обновление каждые $refresh_rate сек.</p>";
}

displayTimeWithColor($refresh_rate);
?>