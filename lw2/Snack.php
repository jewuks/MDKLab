<?php

abstract class Snacks
{
    protected $name = "Alekseevskiy";
    protected $chocolate;
    protected $toppings = array();

    function prepare(string $type): void
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
    function cut(string $type): void
    {
        if ($type == "Белый") {
            print "Snack нужно резать по вертикали кубиками" . "\n";
        } elseif ($type == "Чёрный") {
            print "Snack нужно резать по вертикали кусочками" . "\n";
        }
    }
}
