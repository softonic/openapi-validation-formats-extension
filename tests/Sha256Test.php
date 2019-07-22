<?php

namespace Softonic\OpenApi\Validation\Format\Test;

use PHPUnit\Framework\TestCase;
use Softonic\OpenApi\Validation\Format\Sha256;

class Sha256Test extends TestCase
{
    public function validSha256Provider()
    {
        yield ['ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad'];
        yield ['cb8379ac2098aa165029e3938a51da0bcecfc008fd6795f401178647f96c5b34'];
    }

    /**
     * @dataProvider validSha256Provider
     *
     * @param string $sha256
     */
    public function testValidSha256($sha256)
    {
        $validator = new Sha256();
        $this->assertTrue($validator->validate($sha256));
    }

    public function invalidSha256Provider()
    {
        yield ['Too long' => 'ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad1234'];
        yield ['Too short' => 'ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015'];
        yield ['Invalid chars' => 'ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015az'];
    }

    /**
     * @dataProvider invalidSha256Provider
     *
     * @param string $sha256
     */
    public function testInvalidSha256($sha256)
    {
        $validator = new Sha256();
        $this->assertFalse($validator->validate($sha256));
    }
}
