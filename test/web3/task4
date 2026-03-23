<form method="post">
    Текст: <textarea name="full_text"></textarea><br>
    Поиск: <input type="text" name="search_str"><br>
    <input type="submit" value="Найти">
</form>

<?php
if (!empty($_POST['search_str'])) {
    function searchText($text, $search) {
        $words = explode(" ", $text);
        $index = array_search($search, $words);

        if ($index !== false) {
            $before = ($index > 0) ? $words[$index - 1] : "[начало]";
            $after = ($index < count($words) - 1) ? $words[$index + 1] : "[конец]";
            return "Совпадение есть: $before - $search - $after";
        } else {
            return "Совпадений не обнаружено.";
        }
    }
    echo searchText($_POST['full_text'], $_POST['search_str']);
}
?>