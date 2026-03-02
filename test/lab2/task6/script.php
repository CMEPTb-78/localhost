<?php
$n = 6 + 20;
$arraysizw = 10;
$array = [];
for ($i = 0; $i < $arraysizw; $i++) {
    $array[] = rand(-$n, $n);
}
echo "Массив до сортировки", "<br>";
foreach ($array as $index => $value) {
        echo $value . ($index < count($array) - 1 ? ", " : "");
}
echo "<br>";
echo "Массив после сортировки", "<br>";
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
foreach ($array as $index => $value) {
        echo $value . ($index < count($array) - 1 ? ", " : "");
}