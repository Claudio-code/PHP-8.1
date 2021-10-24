<?php

namespace Claudiosilvajunior\Php\NewFsyncFunction;

class NewFsyncFunctionRun
{
    public static function run(): void
    {
        $file = fopen("NewFsyncFunction/sample.txt", "w");
        fwrite($file, "Some content");

        if (fsync($file)) {
            echo "File has been successfully persisted to disk.";
        }

        fclose($file);
    }
}