<?php

namespace Claudiosilvajunior\Php\enuns;

class Process
{
    public function __construct(
        private Status $status = Status::ACTIVE
    ) {
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}