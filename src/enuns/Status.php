<?php

namespace Claudiosilvajunior\Php\enuns;

enum Status: string
{
    case PENDING = "pending";
    case ACTIVE = "active";
    case ARCHIVED = "archived";
}
