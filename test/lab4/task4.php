<?php
interface InterfaceA {
    public function methodA($num);
}

interface InterfaceB {
    public function methodB($num);
}

class MathClass implements InterfaceA, InterfaceB {
    public function methodA($num) { return $num; }
    public function methodB($num) { return $num; }
}

$math = new MathClass();
$res1 = $math->methodA(10);
$res2 = $math->methodB(3);
echo "Остаток от деления: " . ($res1 % $res2) . "<br>";
?>