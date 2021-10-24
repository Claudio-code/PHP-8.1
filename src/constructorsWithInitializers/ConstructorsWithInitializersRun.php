<?php

namespace Claudiosilvajunior\Php\constructorsWithInitializers;

class ConstructorsWithInitializersRun
{
    public static function run(): void
    {
        $myClass = new MyClass();
        var_dump($myClass);
    }
}