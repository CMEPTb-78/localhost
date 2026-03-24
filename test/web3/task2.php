<form method="post">
    Число 1: <input type="text" name="val1" required><br>
    Число 2: <input type="text" name="val2" required><br>
    Действие:
    <select name="operation">
        <option value="сложение">сложение</option>
        <option value="вычитание">вычитание</option>
        <option value="произведение">произведение</option>
        <option value="деление">деление</option>
    </select><br>
    <input type="submit" value="Вычислить">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = $_POST['val1'];
    $v2 = $_POST['val2'];
    $op = $_POST['operation'];

    function calculate($a, $b, $action) {
        if (!is_numeric($a) || !is_numeric($b)) {
            return "Ошибка: введите корректные числа!";
        }

        switch ($action) {
            case "сложение": $res = $a + $b; $sign = "+"; break;
            case "вычитание": $res = $a - $b; $sign = "-"; break;
            case "произведение": $res = $a * $b; $sign = "*"; break;
            case "деление": 
                if ($b == 0) return "Ошибка: деление на ноль!";
                $res = $a / $b; $sign = "/"; 
                break;
            default: return "Неизвестное действие";
        }
        return "$a $sign $b = $res";
    }

    echo "Результат: " . calculate($v1, $v2, $op);
}
?>