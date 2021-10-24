<?php

function endProgram(): never
{
    exit;
}

function runNewNeverType(): void
{
    endProgram();
    print_r("never printed");
}