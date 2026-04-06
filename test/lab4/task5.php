<?php
trait TraitA {
    protected function getValue($num) { return $num; }
}

trait TraitB {
    protected function getValue($num) { return $num; }
}

class TraitUser {
    use TraitA, TraitB {
        TraitA::getValue insteadof TraitB;
        TraitB::getValue as protected getValueB;
    }

    public function calculate($n1, $n2) {
        return $this->getValue($n1) % $this->getValueB($n2);
    }
}

$traitObj = new TraitUser();
echo "Результат работы с трейтами: " . $traitObj->calculate(10, 3) . "<br>";
?>