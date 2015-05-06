<?php

use DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType;

class ActivityDetailTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ActivityDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\ActivityDetailType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }
}
