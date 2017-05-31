<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use ValidatesRequests;

    /**
     * Calculate the result based on the two operands and operator.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculate(Request $request)
    {
        $this->validate($request, [
            'operator' => 'required'
        ]);

        $result = '';

        //

        return response($result);
    }

    /**
     * Show the main home screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('calculator');
    }
}
