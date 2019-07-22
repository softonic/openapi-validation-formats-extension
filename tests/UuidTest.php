<?php

namespace Softonic\OpenApi\Validation\Format\Test;

use PHPUnit\Framework\TestCase;
use Softonic\OpenApi\Validation\Format\Uuid;

class UuidTest extends TestCase
{
    public function uuidProvider()
    {
        yield ['529abf13-e1ee-41e1-a7e6-c3db0e0765d9'];
        yield ['73dc2d12-963c-4d98-b7f5-5c7ef938beb1'];
        yield ['f07c8998-21cb-46a4-bd67-1d374f7deb0c'];
        yield ['561e511a-e5be-45d2-93cd-0b7352965ce9'];
        yield ['6c972526-2266-466f-ac54-086fcfad97d0'];
        yield ['acba38c3-068c-4841-b557-7b6e4e275e97'];
        yield ['f7057336-2473-4570-84ae-34250700c046'];
    }

    /**
     * @dataProvider uuidProvider
     *
     * @param string $uuid
     */
    public function testValidUuid($uuid)
    {
        $validator = new Uuid();
        $this->assertTrue($validator->validate($uuid));
    }

    public function invalidUuidProvider()
    {
        yield ['Invalid format' => '529abf13e1ee-41e1-a7e6-c3db0e07625d9'];
        yield ['Invalid characters' => '73dc2d12-963c-4d98-b7f5-5z7ef938beb1'];
    }

    /**
     * @dataProvider invalidUuidProvider
     *
     * @param string $uuid
     */
    public function testInvalidUuid($uuid)
    {
        $validator = new Uuid();
        $this->assertFalse($validator->validate($uuid));
    }
}
