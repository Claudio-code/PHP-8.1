<?php

namespace Claudiosilvajunior\Php\FinalClassConstants;

class FinalClassConstantsRun
{
    public static function run(): void
    {
        $myClassTwo = new MyClassTwo();
        var_dump($myClassTwo::TYPE);
    }
}