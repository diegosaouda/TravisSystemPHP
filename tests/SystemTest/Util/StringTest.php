<?php

namespace SystemTest\Util;

use System\Util\String;

class StringTest extends \PHPUnit_Framework_TestCase
{

    public function testUpperCase()
    {
        $value = (new String('teste php string'))->toUpperCase();
        $this->assertEquals('TESTE PHP STRING', $value);
    }

    public function testLowerCase()
    {
        $value = (new String('TESTE PHP STRING'))->toLowerCase();
        $this->assertEquals('teste php string', $value);
    }

    public function testTrim()
    {
        $value = (new String('   teste php string   '))->trim();
        $this->assertEquals('teste php string', $value);
    }

    public function testLength()
    {
        $length = (new String('teste php string'))->length();
        $this->assertEquals(16, $length);
    }

    public function testIsEmpty()
    {
        $string = new String();
        $this->assertEquals(true, $string->isEmpty());
    }

    public function testRevese()
    {
        $string = new String('abc');
        $this->assertEquals('cba', $string->reverse());
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
