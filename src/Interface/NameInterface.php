<?php

namespace Hidenari\ModelSample\Interface;

interface NameInterface
{
    const string INIT_NAME = 'taro';

    public string $name {
        get;
        set;
    }
}
