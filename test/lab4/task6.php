<?php
$anon = new class {
    public $prop1 = "Public 1";
    public $prop2 = "Public 2";
    protected $prop3 = "Protected";
    private $prop4 = "Private";
};

echo "Перечисление свойств:<br>";
foreach ($anon as $key => $value) {
    echo "$key: $value<br>";
}
?>