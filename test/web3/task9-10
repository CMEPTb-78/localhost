<form method="post">
    Текст: <input type="text" name="text"><br>
    Сдвиг: <input type="number" name="shift" value="3"><br>
    Действие: 
    <input type="submit" name="do" value="Зашифровать">
    <input type="submit" name="do" value="Расшифровать">
</form>

<?php
function caesarCipher($str, $shift) {
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= chr(ord($str[$i]) + $shift);
    }
    return $result;
}

if (!empty($_POST['text'])) {
    $text = $_POST['text'];
    $shift = (int)$_POST['shift'];
    
    if ($_POST['do'] == "Зашифровать") {
        echo "Результат шифрования: " . caesarCipher($text, $shift);
    } else {
        echo "Результат дешифровки: " . caesarCipher($text, -$shift);
    }
}
?>