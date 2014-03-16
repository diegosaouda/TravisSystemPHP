<?php

namespace SystemTest\Util;

use System\Util\String;

class StringTest extends \PHPUnit_Framework_TestCase
{

    public function testUpperCase()
    {
    }

    public function testLowerCase()
    {
    }

    public function testTrim()
    {
    }

    public function testLength()
    {
    }

    public function testIsEmpty()
    {
    }

    public function testRevese()
    {
    }

    /**
     * @expectedException \System\Exception\String\NotIsAStringException
     */
    public function testNotIsAStringException()
    {
        $string = new String(['a']);
    }

    public function testToString()
    {
        $string = new String('abc');
        $this->assertEquals('abc', $string->__toString());
    }
}
