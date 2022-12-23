<?php
class Calculator
{
    public $number = 0;

    function sum(int $znachenie)
    {
        $this->number = $this->number + $znachenie;
        return $this;
    }

    function minus(int $znachenie)
    {
        $this->number = $this->number - $znachenie;
        return $this;
    }

    function product(int $znachenie)
    {
        $this->number = $this->number * $znachenie;
        return $this;
    }

    function division(int $znachenie)
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
