<?php

namespace Hidenari\ModelSample;

class Person
{
    public function __construct(
        public $name
        = 'taro' {
            get => 'Mr.'.$this->name;
            set => $this->name = ucwords($value);
        },
        public $age
        = 15 {
            get => $this->age;
            set => $this->age = $value;
        }
    ) {
    }
}