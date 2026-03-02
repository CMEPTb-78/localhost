<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        body { font-family: sans-serif; background: #fdfdfd; padding: 20px; }
        .box { max-width: 400px; margin: 0 auto; border: 2px solid #ddd; padding: 20px; border-radius: 10px; }
        input { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #ff9800; border: none; color: white; cursor: pointer; }
        .item { border-bottom: 1px solid #eee; padding: 10px 0; }
        .title { font-weight: bold; color: #2e7d32; }
    </style>
</head>
<body>
    <div class="box">
    <h3>Поиск по списку</h3>
    <form method="GET">
        <input type="text" name="find" placeholder="Введите букву (например: а)" 
               value="<?php echo isset($_GET['find']) ? $_GET['find'] : ''; ?>">
        <button type="submit">Искать</button>
    </form>
    <div class="results">
        <?php
        $items = [
            "Яблоко" => "Сладкий хрустящий плод.",
            "Апельсин" => "Оранжевый цитрусовый фрукт.",
            "Банан" => "Длинный желтый плод.",
            "Виноград" => "Маленькие ягоды в гроздьях.",
            "Груша" => "Сладкий плод в форме лампочки.",
            "Дыня" => "Очень большая и сладкая ягода.",
            "Ежевика" => "Черная лесная ягода.",
            "Киви" => "Зеленый фрукт с ворсинками.",
            "Лимон" => "Очень кислый желтый цитрус.",
            "Морковь" => "Оранжевый полезный овощ.",
            "Огурец" => "Зеленый пупырчатый овощ.",
            "Помидор" => "Красный сочный овощ."
        ];
        if (!empty($_GET['find'])) {
            $search = $_GET['find'];
            $count = 0;
            echo "<p>Результаты для '<b>$search</b>':</p>";
            foreach ($items as $name => $desc) {
                if (mb_stripos($name, $search) !== false || mb_stripos($desc, $search) !== false) {
                    echo "<div class='item'>";
                    echo "<div class='title'>$name</div>";
                    echo "<div>$desc</div>";
                    echo "</div>";
                    $count++;
                }
            }
            if ($count == 0) echo "Ничего не нашли :(";
        }
        ?>
    </div>
</div>
</body>
</html>