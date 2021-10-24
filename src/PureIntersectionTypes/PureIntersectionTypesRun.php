<?php

namespace Claudiosilvajunior\Php\PureIntersectionTypes;

class PureIntersectionTypesRun
{
    private static function multipleValues(\DateTime&\DateTimeInterface $number): void
    {
        var_dump($number);
    }

    public static function run(): void
    {
        self::multipleValues(new \DateTime());
    }
}