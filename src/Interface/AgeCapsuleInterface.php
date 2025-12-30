<?php

namespace Hidenari\ModelSample\Interface;

interface AgeCapsuleInterface extends AgeAbstractInterface
{
    public int $age {
        get;
    }

    public function setAge(int $age): void;
}
