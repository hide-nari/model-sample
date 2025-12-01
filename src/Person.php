<?php

namespace Hidenari\ModelSample;

class Person
{
    public function __construct(
        public string $forename
        = 'taro' {
            get => 'Mr.'.$this->forename;
            set => $this->forename = ucwords($value);
        },
        public private(set) string $surname
        = 'yamada' {
            get => 'Mr.'.$this->surname;
        },
        public int $age
        = 15 {
            get => $this->age;
            set => $this->age = $value;
        }
    ) {
    }

    public function setSurname(string $surname)
    {
        $this->surname = ucwords($surname);
    }
}