<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="n_count">Введите количество элементов (n):</label>
        <input type="number" name="n_count" id="n_count" min="1" max="100" required>
        <button type="submit">Сгенерировать</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['n_count']);
        if ($n > 0) {
            $squaresArray = [];
            for ($i = 1; $i <= $n; $i++) {
                $squaresArray[$i] = $i * $i;
            }
            echo "<div class='result-box'>";
            echo "<h3>Полученный массив из $n элементов:</h3>";
            foreach ($squaresArray as $index => $value) {
                echo "<div class='number'><b>$index<sup>2</sup></b> = $value</div>";
            }
            echo "</div>";
            echo "<p>Вывод массива:<br>";
            echo "<br>";
            print_r($squaresArray);
            echo "</br>";
        } else {
            echo "<p style='color:red;'>Пожалуйста, введите число больше 0.</p>";
        }
    }
    ?>
</body>
</html>