<?php
$ar1 = range(1, 21, 2);
$ar2 = range(2, 22, 2);
$combinedArray = array_merge($ar1, $ar2);
sort($combinedArray);
echo "<h2>Слияние упорядоченных массивов</h2>";
echo "<b>Массив $ ar1 (нечетные):</b><br>";
echo "[ " . implode(", ", $ar1) . " ]<br><br>";
echo "<b>Массив $ ar2 (четные):</b><br>";
echo "[ " . implode(", ", $ar2) . " ]<br><br>";
echo "<b>Результирующий массив:</b><br>";
echo "<div'>";
echo implode(", ", $combinedArray);
echo "</div>";
echo "<p>Всего элементов: " . count($combinedArray) . "</p>";
?>