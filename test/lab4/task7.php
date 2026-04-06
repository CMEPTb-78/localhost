<?php
$magicAnon = new class {
    private $data;

    public function __set($name, $value) {
        $this->data = $value;
    }

    public function __get($name) {
        if (!isset($this->data)) {
            return "Предупреждение: Свойство не инициализировано!";
        }
        return $this->data;
    }
};

// 1. Попытка вывода до инициализации
echo "До инициализации: " . $magicAnon->someProperty . "<br>";

// 2. Присвоение значения и вывод
$magicAnon->someProperty = "Данные установлены";
echo "После инициализации: " . $magicAnon->someProperty . "<br>";
?>