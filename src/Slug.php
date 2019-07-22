<?php

namespace Softonic\OpenApi\Validation\Format;

use Opis\JsonSchema\IFormat;

final class Slug implements IFormat
{
    const PATTERN_FORMAT = '/^[a-z0-9]+(?:-[a-z0-9]+)*$/';

    public function validate($data): bool
    {
        return preg_match(self::PATTERN_FORMAT, $data) > 0;
    }
}
