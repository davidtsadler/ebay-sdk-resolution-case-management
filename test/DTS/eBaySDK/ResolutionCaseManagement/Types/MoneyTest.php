<?php

use DTS\eBaySDK\ResolutionCaseManagement\Types\Money;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Money();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\Money', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DecimalType', $this->obj);
    }
}
