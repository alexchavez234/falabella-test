<?php

use PHPUnit\Framework\TestCase;
use App\Classes\Calc;

class CalcTest extends TestCase
{
    public function test_sum()
    {
        $calc = new Calc();
        $result = $calc->sum(100);
        $this->assertTrue($result);
    }
}