<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            width: 250px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 3px solid #4A90E2; 
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #e67e22;
        }

        .card-title {
            font-weight: bold;
            color: #333;
            border-bottom: 1px solid #eee;
            margin-bottom: 10px;
            padding-bottom: 5px;
            text-transform: uppercase;
        }

        .card-text {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
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
        foreach ($items as $name => $description) {
            echo "<div class='card'>";
            echo "<div class='card-title'>$name</div>";
            echo "<div class='card-text'>$description</div>";
            echo "</div>";
        }
    ?>
</body>
</html>