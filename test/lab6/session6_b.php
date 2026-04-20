<?php
session_start();
$e = $_SESSION['e'] ?? "";
?>
<form>
    Имя: <input type="text"><br>
    Email: <input type="email" value="<?php echo $e; ?>">
</form>