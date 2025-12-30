<?php

namespace Hidenari\ModelSample\Interface;

interface AgeCapsuleInterface
{
    public int $age {
        get;
    }

    public function setAge(int $age): void;
}
