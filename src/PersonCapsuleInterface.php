<?php

namespace Hidenari\ModelSample;

interface PersonCapsuleInterface
{
    public string $name {
        get;
    }

    public int $age {
        get;
    }

    public function setName(string $name);

    public function setAge(int $age);
}
