<?php

namespace Claudiosilvajunior\Php\fibers;

use Fiber;

class RunFiber
{
    public static function run(): void
    {
        $fiber = new Fiber(function (): void {
            $valueAfterResuming = Fiber::suspend('after suspending');
            var_dump($valueAfterResuming);
        });

        $valueAfterSuspending = $fiber->start();
        var_dump($valueAfterSuspending);

        $fiber->resume('after resuming');
    }
}