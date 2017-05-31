<?php

namespace App;

use App\Contracts\Calculator;

class Scream implements Calculator
{
    /**
     * Cast both operands to integers. For numbers 0-255 convert to binary and 
     * output U+1F47E for 0 and U+1F383 for 1. For numbers outside this range 
     * output U+1F4A9.
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
