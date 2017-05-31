<?php

namespace Tests\Unit;

use App\Scream;
use Tests\TestCase;

class ScreamTest extends TestCase
{
    /**
     * Test various types of string inputs.
     *
     * @return void
     */
    public function test()
    {
        $calculator = new Scream;

        $this->assertEquals($calculator->calculate('', ''), '&#x1F47E &#x1F47E');
        $this->assertEquals($calculator->calculate('Lorem', 'ipsum'), '&#x1F47E &#x1F47E');
        $this->assertEquals($calculator->calculate('1', '-1'), '&#x1F383 &#x1F4A9');
        $this->assertEquals($calculator->calculate('0', '1'), '&#x1F47E &#x1F383');
        $this->assertEquals($calculator->calculate('1', '1'), '&#x1F383 &#x1F383');
        $this->assertEquals($calculator->calculate('2', '2'), '&#x1F383&#x1F47E &#x1F383&#x1F47E');
        $this->assertEquals($calculator->calculate('2', '3'), '&#x1F383&#x1F47E &#x1F383&#x1F383');
        $this->assertEquals($calculator->calculate('99', '199'), '&#x1F383&#x1F383&#x1F47E&#x1F47E&#x1F47E&#x1F383&#x1F383 &#x1F383&#x1F383&#x1F47E&#x1F47E&#x1F47E&#x1F383&#x1F383&#x1F383');
        $this->assertEquals($calculator->calculate('255', '256'), '&#x1F383&#x1F383&#x1F383&#x1F383&#x1F383&#x1F383&#x1F383&#x1F383 &#x1F4A9');
    }
}
