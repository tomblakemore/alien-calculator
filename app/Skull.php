<?php

namespace App;

use App\Contracts\Calculator;

class Skull implements Calculator
{
    /**
     * Cast both operands to string and concatenate with ' : '.
     *
     * @param mixed $operand1
     * @param mixed $operand2
     * @return string
     */
    public function calculate($operand1, $operand2)
    {
        //
    }
}
