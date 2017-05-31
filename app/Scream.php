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
        $operand1 = $this->transform($operand1);
        $operand2 = $this->transform($operand2);

        return $operand1 . ' ' . $operand2;
    }

    /**
     * Transform an integer to a unicode string.
     *
     * @access private
     * @param int $operand
     * @return string
     */
    private function transform($operand)
    {
        $operand = (int) $operand;

        if ($operand >= 0 && $operand <= 255) {
            $operand = decbin($operand);
            $operand = str_replace('1', '&#x1F383', $operand);
            $operand = str_replace('0', '&#x1F47E', $operand);
        } else {
            $operand = '&#x1F4A9';
        }

        return $operand;
    }
}
