<?php
require_once('Snack.php');
abstract class ChocolateFactory extends Snacks
{
    abstract function createSnack(string $type): Snacks;

    public function orderSnack(string $type): void
    {
        $Chocolate = $this->createSnack("Белый");
        $this->prepare($type);
        $this->cut($type);
    }
}
