<?php

namespace Hidenari\ModelSample;

use ReflectionProperty;

trait ValidateNameLength
{
    private function validateNameLength($name): void
    {
        $ref = new ReflectionProperty(Person::class, 'name');
        $attributes = $ref->getAttributes(ValidateLength::class);
        foreach ($attributes as $attribute) {
            if (mb_strlen($name) < $attribute->newInstance()->min
                || mb_strlen($name) > $attribute->newInstance()->max
            ) {
                throw new \InvalidArgumentException('Invalid name string');
            }
        }
    }
}
