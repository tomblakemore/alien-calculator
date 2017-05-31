<?php

namespace App;

use App\Contracts\Calculator;

class Alien implements Calculator
{
    /**
     * Cast both operands to integers and multiply together.
     *
     * @param mixed $operand1
     * @param mixed $operand2
     * @return int
     */
    public function calculate($operand1, $operand2)
    {
        return (int) $operand1 * (int) $operand2;
    }
}
