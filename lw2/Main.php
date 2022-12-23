<?php
require_once('ChocolateFactory.php');
class Test extends ChocolateFactory
{
    function createSnack($type)
    {
        $this->orderSnack($type);
    }
}
$beliy = new Test;
$beliy->createSnack("Белый");
$beliy->createSnack("Чёрный");

?>