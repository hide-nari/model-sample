<?php

namespace Hidenari\ModelSample;

class PersonOne
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

class PersonTwo
{
    public function __construct(
        public private(set) string $name
        = 'taro' {
            get => 'Mr.'.$this->name;
        },
        public private(set) int $age
        = 15 {
            get => $this->age;
        }
    ) {
    }

    public function setName(string $name)
    {
        $this->name = ucwords($name);
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
}