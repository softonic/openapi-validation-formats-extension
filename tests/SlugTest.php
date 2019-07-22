<?php

namespace Softonic\OpenApi\Validation\Format\Test;

use PHPUnit\Framework\TestCase;
use Softonic\OpenApi\Validation\Format\Slug;

class SlugTest extends TestCase
{
    public function validSlugProvider()
    {
        yield ['foobar'];
        yield ['foo-bar'];
    }

    /**
     * @dataProvider validSlugProvider
     *
     * @param string $slug
     */
    public function testValidSlug($slug)
    {
        $validator = new Slug();
        $this->assertTrue($validator->validate($slug));
    }

    public function invalidSlugProvider()
    {
        yield ['Invalid chars' => 'foo/bar'];
        yield ['Invalid chars' => 'foo$bar'];
        yield ['Invalid starting char' => '-foobar'];
    }

    /**
     * @dataProvider invalidSlugProvider
     *
     * @param string $slug
     */
    public function testInvalidSlug($slug)
    {
        $validator = new Slug();
        $this->assertFalse($validator->validate($slug));
    }
}
