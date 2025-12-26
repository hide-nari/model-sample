<?php

namespace Hidenari\ModelSample;

use ReflectionClass;
use ReflectionProperty;

trait ValidateNameLength
{
    private function validateNameLength($name): void
    {
        $refClass = new ReflectionClass(__CLASS__);
        foreach ($refClass->getProperties() as $property) {
            $refProperty = new ReflectionProperty(__CLASS__, $property->getName());
            $attributes = $refProperty->getAttributes(ValidateLength::class);
            foreach ($attributes as $attribute) {
                if (mb_strlen($name) < $attribute->newInstance()->min
                    || mb_strlen($name) > $attribute->newInstance()->max
                ) {
                    throw new \InvalidArgumentException('Invalid name string');
                }
            }
        }
    }
}
