<?php

namespace Softonic\OpenApi\Validation\Format;

use Opis\JsonSchema\IFormat;

/**
 * Class Sha256
 */
final class Sha256 implements IFormat
{
    const PATTERN_FORMAT = '/^[0-9a-f]{64}$/i';

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
