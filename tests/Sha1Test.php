<?php

namespace Softonic\OpenApi\Validation\Format\Test;

use PHPUnit\Framework\TestCase;
use Softonic\OpenApi\Validation\Format\Sha1;

class Sha1Test extends TestCase
{
    public function validSha1Provider()
    {
        yield ['529abf13e1ee41e1a7e6c3db0e0765d9451a5c5f'];
        yield ['73dc2d12963c4d98b7f55c7ef938beb1bca54ddd'];
    }

    /**
     * @dataProvider validSha1Provider
     *
     * @param string $sha1
     */
    public function testValidSha1($sha1)
    {
        $validator = new Sha1();
        $this->assertTrue($validator->validate($sha1));
    }

    public function invalidSha1Provider()
    {
        yield ['Too long' => '529abf13e1ee41e1a7e6c3db0e0765d9451a5c5f2'];
        yield ['Too short' => '529abf13e1ee41e1a7e6c3db0e0765d9451a5c5'];
        yield ['Invalid chars' => 'z3dc2d12963c4d98b7f55c7ef938beb1bca54ddd'];
    }

    /**
     * @dataProvider invalidSha1Provider
     *
     * @param string $sha1
     */
    public function testInvalidSha1($sha1)
    {
        $validator = new Sha1();
        $this->assertFalse($validator->validate($sha1));
    }
}
