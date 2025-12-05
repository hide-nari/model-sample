<?php

namespace Hidenari\ModelSample;

class PersonInterfaceImpl implements PersonInterface
{
    public function __construct(
        public string $name
        = 'taro' {
            get => 'Mr.'.$this->name;
            set => $this->name = ucwords($value);
        },
        public int $age
        = 15 {
            get => $this->age;
            set => $this->age = $value;
        }
    ) {
    }
}
