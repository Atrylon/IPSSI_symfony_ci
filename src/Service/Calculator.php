<?php
/**
 * Created by PhpStorm.
 * User: beren
 * Date: 24/06/2019
 * Time: 14:30
 */

namespace App\Service;

class Calculator
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber + 2 ;
    }

    public function divide(float $a, float $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('Dividing by zero is impossible🤯🤯🤯🤯🤯');
        }

        return $a / $b;
    }
}