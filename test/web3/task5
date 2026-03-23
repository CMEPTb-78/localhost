<form method="post">
    Выберите месяц:
    <select name="month">
        <?php
        for ($m=1; $m<=12; $m++) {
            $month_name = date('F', mktime(0, 0, 0, $m, 1));
            echo "<option value='$m'>$month_name</option>";
        }
        ?>
    </select>
    <input type="submit" value="Узнать дни">
</form>

<?php
if (isset($_POST['month'])) {
    function getDaysInMonth($m) {
        $days = cal_days_in_month(CAL_GREGORIAN, $m, date('Y'));
        $month_names = [1=>"Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
        return "Месяц " . $month_names[$m] . " – " . $days . " дней.";
    }
    echo getDaysInMonth($_POST['month']);
}
?>