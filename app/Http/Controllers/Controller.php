<?php

namespace App\Http\Controllers;

use App\Contracts\Calculator;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use ValidatesRequests;

    /**
     * The calculator to use for the result.
     *
     * @var Calculator
     */
    protected $calculator;

    /**
     * Create a new controller instance.
     *
     * @param Calcualtor $calculator
     * @return void
     */
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * Calculate the result based on the two operands and operator.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {
        $operand1 = $request->input('operand1');
        $operand2 = $request->input('operand2');

        $result = $this->calculator->calculate($operand1, $operand2);

        return response($result);
    }
}
