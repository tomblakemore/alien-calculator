<?php

namespace App\Contracts;

interface Calculator
{
    /**
     * Calculate and return the value for two input operands.
     *
     * @param mixed $operand1
     * @param mixed $operand2
     * @return mixed
     */
     public function calculate($operand1, $operand2);
}
