<?php

namespace Softonic\OpenApi\Validation\Format;

use Opis\JsonSchema\IFormat;

/**
 * Class Uuid
 *
 * Basic validator created until the Respect validator is released.
 *
 * @see https://github.com/Respect/Validation/blob/master/library/Rules/Uuid.php
 */
final class Uuid implements IFormat
{
    const PATTERN_FORMAT = '/^[0-9a-f]{8}-[0-9a-f]{4}-[13-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i';

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
