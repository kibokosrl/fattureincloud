<?php

namespace Svbk\FattureInCloud;

use DateTimeImmutable;

class Date extends DateTimeImmutable
{
    const FORMAT = 'd/m/Y';

    public static function createFromFormat($format, $time, $timezone = null)
    {
        return new static();
    }

    public static function createFromMutable($datetime)
    {
        return new static();
    }

    public function format($format = null)
    {
        return parent::format(self::FORMAT);
    }
}
