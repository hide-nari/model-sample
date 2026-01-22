<?php

namespace Hidenari\ModelSample\Enum;

enum GradeEnum
{
    case GOLD;
    case SILVER;
    case BRONZE;

    public function upGrade(GradeEnum $grade): GradeEnum
    {
        return match ($grade) {
            GradeEnum::BRONZE => GradeEnum::SILVER,
            GradeEnum::SILVER => GradeEnum::GOLD,
            default => throw new \InvalidArgumentException('Unexpected Enum value'),
        };
    }

    public function downGrade(GradeEnum $grade): GradeEnum
    {
        return match ($grade) {
            GradeEnum::GOLD => GradeEnum::SILVER,
            GradeEnum::SILVER => GradeEnum::BRONZE,
            default => throw new \InvalidArgumentException('Unexpected Enum value'),
        };
    }
}
