<?php
namespace Icovn\PhpIpFilter;

class IpFilterTest extends \PHPUnit_Framework_TestCase
{
    public function testSubnetInWildcast()
    {
        $expected = true;
        $filter = new IpFilter('10.28.255.*');
        $actual = $filter -> check('10.28.255.1');
        $this->assertEquals($expected, $actual);
    }

    public function testSubnetMask()
    {
        $expected = true;
        $filter = new IpFilter('10.28.0.0/255.255.0.0');
        $actual = $filter -> check('10.28.2.1');
        $this->assertEquals($expected, $actual);
    }

    public function testSubnetInMaskAdvance()
    {
        $expected = true;
        $filter = new IpFilter('10.28.0.0 255.255.0.0');
        $actual = $filter -> check('10.28.255.1');
        $this->assertEquals($expected, $actual);
    }

    public function testSubnetInSection()
    {
        $expected = true;
        $filter = new IpFilter('10.28.255.0-10.28.255.9');
        $actual = $filter -> check('10.28.255.1');
        $this->assertEquals($expected, $actual);
    }
}
