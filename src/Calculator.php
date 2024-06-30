<?php

namespace CongNx\Calculator;

class Calculator implements CalculatorInterface
{
    public function sum($a, $b): mixed
    {
        return $a + $b;
    }

    public function subtract($a, $b): mixed
    {
        return $a - $b;
    }

    public function multiply($a, $b): mixed
    {
        dd(123);
        return $a * $b;
    }
}
