<?php

abstract class Snacks
{
    protected $name = "Alekseevskiy";
    protected $chocolate;
    protected $toppings = array();

    abstract function prepare($type);
    abstract function cut($type);
}
