<?php

namespace Tests\Unit;

use App\Alien;
use Tests\TestCase;

class AlienTest extends TestCase
{
    /**
     * Test various types of string inputs.
     *
     * @return void
     */
    public function test()
    {
        $calculator = new Alien;

        $this->assertEquals($calculator->calculate('', ''), 0);
        $this->assertEquals($calculator->calculate('Lorem', 'ipsum'), 0);
        $this->assertEquals($calculator->calculate('1', '-1'), -1);
        $this->assertEquals($calculator->calculate('0', '1'), 0);
        $this->assertEquals($calculator->calculate('1', '1'), 1);
        $this->assertEquals($calculator->calculate('2', '2'), 4);
        $this->assertEquals($calculator->calculate('2', '3'), 6);
    }
}
