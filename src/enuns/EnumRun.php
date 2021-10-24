<?php

namespace Claudiosilvajunior\Php\enuns;

class EnumRun
{
    public static function run(): void
    {
        $process = new Process();
        print_r($process->getStatus());
    }
}