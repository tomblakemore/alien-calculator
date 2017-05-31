<?php

namespace Tests\Unit;

use App\Ghost;
use Tests\TestCase;

class GhostTest extends TestCase
{
    /**
     * Test various types of string inputs.
     *
     * @return void
     */
    public function test()
    {
        $calculator = new Ghost;

        $this->assertEquals($calculator->calculate('', ''), 0);
        $this->assertEquals($calculator->calculate('Lorem', 'ipsum'), 0);
        $this->assertEquals($calculator->calculate('1', '-1'), 1.5);
        $this->assertEquals($calculator->calculate('0', '1'), 0.5);
        $this->assertEquals($calculator->calculate('1', '1'), 2.5);
        $this->assertEquals($calculator->calculate('2', '2'), 5);
        $this->assertEquals($calculator->calculate('2', '3.5'), 5.8);
    }
}
