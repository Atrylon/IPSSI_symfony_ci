<?php

namespace App\Service;

class Calculator
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }

    public function divide(float $a, float $b): float
    {
        if (0 === $b) {
            throw new InvalidArgumentException('Dividing by zero is impossible🤯🤯🤯🤯🤯');
        }

        return $a / $b;
    }
}