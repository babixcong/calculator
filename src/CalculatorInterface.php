<?php

namespace CongNx\Calculator;

interface CalculatorInterface
{
    public function sum($a, $b): mixed;

    public function subtract($a, $b): mixed;

    public function multiply($a, $b): mixed;
}
