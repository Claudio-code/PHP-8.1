<?php

namespace Claudiosilvajunior\Php\ReadonlyProperties;

class ReadonlyPropertiesRun
{
    public static function run(): void
    {
        $myClass = new MyClass("my life", new \DateTimeImmutable());
        print_r("\n\n\n");
        var_dump($myClass->title);
        $myClass->title = "your life";
    }
}