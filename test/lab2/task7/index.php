<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        for ($i = 1; $i < 101; $i++) {
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            echo "<tr>";
            echo "<td style='background-color: rgb($red, $green, $blue); padding: 10px;'>$red.$green.$blue</td>";
            echo "<td style='background-color: rgb(161, 161, 161); padding: 10px;'>$red.$green.$blue</td>";
            echo "</tr>";
        }   
        ?>
    </table>
</body>
</html>