<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Сумма и произведение элементов массива</h2>
    <form method="POST">
        <p>Введите числа через пробел или запятую:</p>
        <input type="text" name="user_numbers" placeholder="Например: 5, 10, 2, 4" required>
        <button type="submit">Рассчитать</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['user_numbers'];
        $rawArray = preg_split('/[\s,]+/', trim($inputString));
        $numbers = array_map('floatval', $rawArray);
        $summa = 0;
        $proizv = 1;
        foreach ($numbers as $val) {
            $summa += $val;
            $proizv *= $val;
        }
        $sumfunc = array_sum($numbers);
        $prodfunc = array_product($numbers);
        echo "<div class='result'>";
        echo "<b>Ваш массив:</b> [" . implode(", ", $numbers) . "]<br><br>";
        echo "<b>Способ 1 (Циклы):</b><br>";
        echo "Сумма: $summa<br>";
        echo "Произведение: $proizv<br><br>";
        echo "<b>Способ 2 (Встроенные функции):</b><br>";
        echo "Сумма (array_sum): $sumfunc<br>";
        echo "Произведение (array_product): $prodfunc";
        echo "</div>";
    }
    ?>
    </div>
</body>
</html>