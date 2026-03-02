<?php
$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(0, 20);
}
$counts = array_count_values($numbers);
$duplicates = [];
foreach ($numbers as $index => $value) {
    if ($counts[$value] > 1) {
        $duplicates[] = $index;
    }
}
$uniqueNumbers = array_unique($numbers);
$uniqueNumbersClean = array_values($uniqueNumbers);
echo "<h2>Задание №10: Анализ массива</h2>";
echo "<b>1. Исходный массив (100 элементов):</b><br>";
echo "<div style='background: #f0f0f0; padding: 10px; border: 1px solid #ccc;'>";
echo implode(", ", $numbers);
echo "</div><br>";
echo "<b>2. Индексы элементов, у которых есть совпадения (повторы):</b><br>";
echo "<div style='background: #fff3cd; padding: 10px; border: 1px solid #ffeeba;'>";
echo implode(", ", $duplicates);
echo "</div>";
echo "Всего элементов с повторами: " . count($duplicates) . "<br><br>";
echo "<b>3. Массив после удаления повторов (только уникальные значения):</b><br>";
echo "<div style='background: #d4edda; padding: 10px; border: 1px solid #c3e6cb;'>";
echo implode(", ", $uniqueNumbersClean);
echo "</div>";
echo "Количество уникальных элементов: " . count($uniqueNumbersClean);
?>