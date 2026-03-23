<form method="post">
    Элементы (через запятую): <input type="text" name="array_input"><br>
    Порядок: 
    <input type="radio" name="order" value="asc" checked> По возрастанию
    <input type="radio" name="order" value="desc"> По убыванию<br>
    <input type="submit" value="Сортировать">
</form>

<?php
function bubbleSort($arr, $asc = true) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            $condition = $asc ? ($arr[$j] > $arr[$j+1]) : ($arr[$j] < $arr[$j+1]);
            if ($condition) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

if (!empty($_POST['array_input'])) {
    $input_arr = explode(",", $_POST['array_input']);
    $order = ($_POST['order'] == 'asc');
    
    $sorted_arr = bubbleSort($input_arr, $order);

    echo "<h4>Введенный массив:</h4><ol>";
    foreach($input_arr as $v) echo "<li>".trim($v)."</li>";
    echo "</ol>";

    echo "<h4>Отсортированный массив:</h4><ol>";
    foreach($sorted_arr as $v) echo "<li>".trim($v)."</li>";
    echo "</ol>";
}
?>