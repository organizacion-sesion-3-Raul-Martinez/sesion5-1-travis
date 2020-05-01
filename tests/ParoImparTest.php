<?php
use PHPUnit\Framework\TestCase;
require 'ParoImpar.php';

class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new ParoImpar();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testPar()
    {
        $result = $this->calculator->par(5);
        $this->assertEquals(0, $result);
    }


}
