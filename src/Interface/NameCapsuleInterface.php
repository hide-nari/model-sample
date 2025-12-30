<?php

namespace Hidenari\ModelSample\Interface;

interface NameCapsuleInterface extends NameAbstractInterface
{
    public string $name {
        get;
    }

    public function setName(string $name): void;
}
