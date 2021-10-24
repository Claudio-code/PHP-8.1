<?php

namespace Claudiosilvajunior\Php\constructorsWithInitializers;

class MyClass
{
    public function __construct(
        private ObjectToBoot $objectToBoot = new ObjectToBoot(),
    ) {}

    public function getObjectToBoot(): ObjectToBoot
    {
        return $this->objectToBoot;
    }
}