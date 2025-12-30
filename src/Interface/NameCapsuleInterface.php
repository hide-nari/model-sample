<?php

namespace Hidenari\ModelSample\Interface;

interface NameCapsuleInterface
{
    public string $name {
        get;
    }

    public function setName(string $name): void;
}
