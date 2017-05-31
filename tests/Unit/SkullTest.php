<?php

namespace Tests\Unit;

use App\Skull;
use Tests\TestCase;

class SkullTest extends TestCase
{
    /**
     * Test various types of string inputs.
     *
     * @return void
     */
    public function test()
    {
        $calculator = new Skull;

        $this->assertEquals($calculator->calculate('', ''), ' : ');
        $this->assertEquals($calculator->calculate('Lorem', 'ipsum'), 'Lorem : ipsum');
        $this->assertEquals($calculator->calculate('1', '-1'), '1 : -1');
        $this->assertEquals($calculator->calculate('0', '1'), '0 : 1');
        $this->assertEquals($calculator->calculate('1', '1'), '1 : 1');
        $this->assertEquals($calculator->calculate('2', '2'), '2 : 2');
        $this->assertEquals($calculator->calculate('2', '3'), '2 : 3');
    }
}
