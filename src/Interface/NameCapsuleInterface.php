<?php

namespace Hidenari\ModelSample\Interface;

interface NameCapsuleInterface
{
    const string INIT_NAME = 'taro';

    public string $name {
        get;
    }

    public function setName(string $name): void;
}
