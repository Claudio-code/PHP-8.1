<?php

namespace Claudiosilvajunior\Php\ReadonlyProperties;

use DateTimeImmutable;

class MyClass
{
    public function __construct(
        public readonly string $title,
        public readonly DateTimeImmutable $createAt,
    ) {}
}