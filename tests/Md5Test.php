<?php

namespace Softonic\OpenApi\Validation\Format\Test;

use PHPUnit\Framework\TestCase;
use Softonic\OpenApi\Validation\Format\Md5;

class Md5Test extends TestCase
{
    public function validMd5Provider()
    {
        yield ['900150983cd24fb0d6963f7d28e17f72'];
        yield ['4ed9407630eb1000c0f6b63842defa7d'];
    }

    /**
     * @dataProvider validMd5Provider
     * @param mixed $md5
     */
    public function testValidMd5($md5)
    {
        $validator = new Md5();
        $this->assertTrue($validator->validate($md5));
    }

    public function invalidMd5Provider()
    {
        yield ['Too long' => '4ed9407630eb1000c0f6b63842defa7d123'];
        yield ['Too short' => '4ed9407630eb1000c0f6b63842def'];
        yield ['Invalid chars' => '4ed9407630eb1000c0f6b63842defa7z'];
    }

    /**
     * @dataProvider invalidMd5Provider
     * @param mixed $uuid
     */
    public function testInvalidMd5($md5)
    {
        $validator = new Md5();
        $this->assertFalse($validator->validate($md5));
    }
}
