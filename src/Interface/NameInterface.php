<?php

namespace Hidenari\ModelSample\Interface;

interface NameInterface
{
    public const string INIT_NAME = 'taro';

    public string $name {
        get;
        set;
    }
}
