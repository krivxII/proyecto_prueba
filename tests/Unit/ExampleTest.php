<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\src\Calculator;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_suma()
    {
        $this->assertSame(16,Calculator::suma(10,6));
    }
    public function test_resta()
    {
        $this->assertSame(4,Calculator::resta(10,6));
    }
    public function test_multiplicacion()
    {
        $this->assertSame(60,Calculator::multiplicacion(10,6));
    }
    public function test_division()
    {
        $this->assertSame(3,Calculator::division(18,6));
    }
}
