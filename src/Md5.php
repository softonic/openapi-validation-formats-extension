<?php

namespace Softonic\OpenApi\Validation\Format;

use Opis\JsonSchema\IFormat;

/**
 * Class Md5
 */
final class Md5 implements IFormat
{
    const PATTERN_FORMAT = '/^[0-9a-f]{32}$/i';

    /**
     * @param $data
     *
     * @return bool
     */
    public function validate($data): bool
    {
        return preg_match(self::PATTERN_FORMAT, $data) > 0;
    }
}
