<?php
session_start();
if (!isset($_SESSION['phonebook'])) {
    $_SESSION['phonebook'] = [
        "8-900-111-22-33" => "Иванов Иван Иванович",
        "8-900-222-33-44" => "Петров Петр Петрович",
        "8-900-333-44-55" => "Сидоров Сидор Сидорович",
        "8-900-444-55-66" => "Алексеев Алексей Алексеевич",
        "8-900-555-66-77" => "Дмитриев Дмитрий Дмитриевич",
        "8-911-000-00-01" => "Павлов Павел",
        "8-922-000-00-02" => "Сергеев Сергей",
        "8-933-000-00-03" => "Андреев Андрей",
        "8-944-000-00-04" => "Николаев Николай",
        "8-955-000-00-05" => "Михайлов Михаил"
    ];
}
if (isset($_POST['add_entry'])) {
    $newName = trim($_POST['new_name']);
    $newPhone = trim($_POST['new_phone']);
    if (!empty($newName) && !empty($newPhone)) {
        $_SESSION['phonebook'][$newPhone] = $newName;
        $message = "Запись добавлена!";
    }
}
$searchResults = [];
if (isset($_POST['search_submit'])) {
    $query = mb_strtolower(trim($_POST['search_query']));
    foreach ($_SESSION['phonebook'] as $phone => $name) {
        if (strpos(mb_strtolower($name), $query) !== false || strpos($phone, $query) !== false) {
            $searchResults[$phone] = $name;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: sans-serif; display: flex; gap: 20px; padding: 20px; }
        .panel { border: 1px solid #ccc; padding: 15px; border-radius: 8px; width: 300px; }
        .display { flex-grow: 1; border: 1px solid #eee; padding: 15px; }
        h3 { margin-top: 0; }
        input { width: 90%; margin-bottom: 10px; padding: 5px; }
        .found { background: #e1f5fe; padding: 5px; margin-bottom: 5px; border-radius: 4px; }
    </style>
</head>
<body>
<div class="panel">
    <h3>Добавить запись</h3>
    <form method="POST" action="">
        <input type="text" name="new_name" placeholder="ФИО" required>
        <input type="text" name="new_phone" placeholder="Номер телефона" required>
        <button type="submit" name="add_entry">Добавить</button>
    </form>
    <?php if(isset($message)) echo "<p style='color:green'>$message</p>"; ?>
    <hr>
    <h3>Поиск</h3>
    <form method="POST">
        <input type="text" name="search_query" placeholder="Имя или номер..." required>
        <button type="submit" name="search_submit">Найти</button>
    </form>
</div>
<div class="display">
    <h3>Результаты поиска / Справочник</h3>
    <?php if (!empty($searchResults)): ?>
        <p><b>Найдено записей: <?php echo count($searchResults); ?></b></p>
        <?php foreach ($searchResults as $phone => $name): ?>
            <div class="found">📱 <?php echo "<b>$phone</b> — $name"; ?></div>
        <?php endforeach; ?>
    <?php elseif (isset($_POST['search_submit'])): ?>
        <p style="color:red">Ничего не найдено.</p>
    <?php else: ?>
        <p><i>Здесь появятся результаты поиска. Сейчас в базе <?php echo count($_SESSION['phonebook']); ?> записей.</i></p>
        <details>
            <summary>Показать весь список</summary>
            <ul>
                <?php foreach ($_SESSION['phonebook'] as $phone => $name): ?>
                    <li><?php echo "$name: $phone"; ?></li>
                <?php endforeach; ?>
            </ul>
        </details>
    <?php endif; ?>
</div>
</body>
</html>