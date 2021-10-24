<?php


function foo(int $a, int $b) : void
{
    var_dump($a, $b);
}

function runFirstClassCallableSyntax(): void
{
    $foo = foo(...);

    $foo(a: 1, b: 2);
}