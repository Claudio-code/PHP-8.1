<?php

namespace Claudiosilvajunior\Php\arrayUnpackingWithKeys;

class ArrayUnpackingWithKeysRun
{
    public static function run(): void
    {
        $array1 = ["a" => 1];
        $array2 = ["b" => 2];
        $array = ["a" => 0, ...$array1, ...$array2];

        var_dump($array);
    }
}