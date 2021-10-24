<?php

namespace Claudiosilvajunior\Php\NewArrayIsListFunction;

class NewArrayIsListFunctionRun
{
    public static function run(): void
    {
        $list = ["house", "friend", "ass"];
        var_dump(array_is_list($list));

        $noList = [2 => "book", 1 => "never used", 9 => "work"];
        var_dump(array_is_list($noList));
    }
}