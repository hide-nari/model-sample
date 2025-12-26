<?php

namespace Hidenari\ModelSample;

use Attribute;

#[Attribute]
class ValidateLength
{
    public function __construct(public $min, public $max) {}
}
