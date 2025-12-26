<?php

namespace Hidenari\ModelSample;

use Attribute;

#[Attribute]
class ValidateLength
{
    public function __construct(public int $min, public int $max) {}
}
