<?php

namespace Hidenari\ModelSample\Interface;

interface AgeCapsuleInterface
{
    const int INIT_AGE = 15;

    public int $age {
        get;
    }

    public function setAge(int $age): void;
}
