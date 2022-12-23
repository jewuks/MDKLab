<?php
class Calculator
{
    public $number = 0;

    function sum(int $znachenie): Calculator
    {
        $this->number = $this->number + $znachenie;
        return $this;
    }

    function minus(int $znachenie): Calculator
    {
        $this->number = $this->number - $znachenie;
        return $this;
    }

    function product(int $znachenie): Calculator
    {
        $this->number = $this->number * $znachenie;
        return $this;
    }

    function division(int $znachenie): Calculator
    {
        if ($znachenie == 0) {
            $this->number = 0;
            return $this;
        } else {
            $this->number = $this->number / $znachenie;
            return $this;
        }
    }

    function getResult(): int
    {
        return $this->number;
    }
}
