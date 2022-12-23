<?php
require('Snack.php');
abstract class ChocolateFactory extends Snacks
{
    abstract function createSnack($type);

    function orderSnack($type)
    {
        $this->prepare($type);
        $this->cut($type);
    }
    function prepare($type)
    {
        if ($type === 'Белый') {
            $this->chocolate = "Белый";
            $this->toppings = ["Шипучка", "Изюм", "Орехи"];
        }
        if ($type === "Чёрный") {
            $this->chocolate = "Чёрный";
            $this->toppings = ["Изюм", "Орехи"];
        }
        print "Началось создание snack-a :  " . $this->name . "\n";
        print "Добавляется шоколад : " . $this->chocolate . "\n";
        print "Добавлены начинки : \n";
        for ($i = 0; $i < count($this->toppings); $i++) {
            print $this->toppings[$i] . "\n";
        }
    }
    function cut($type)
    {
        if ($type = "Белый") {
            print "Snack нужно резать по вертикали кубиками" . "\n";
        } elseif ($type = "Чёрный") {
            print "Snack нужно резать по вертикали кусочками" . "\n";
        }
    }
}
