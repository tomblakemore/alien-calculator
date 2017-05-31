<?php

namespace App;

use App\Contracts\Calculator;

class Ghost implements Calculator
{
    /**
     * Cast both operands to numbers, double the first and halve the second, 
     * then add together to 1dp accuracy.
     *
     * @param mixed $operand1
     * @param mixed $operand2
     * @return float
     */
    public function calculate($operand1, $operand2)
    {
        $result = ((float) $operand1 * 2) + ((float) $operand2 / 2);

        if ((int) $result == $result) {
            return (int) $result;
        }

        return round($result, 1);
    }
}
