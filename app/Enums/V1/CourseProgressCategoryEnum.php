<?php

namespace App\Enums\V1;

enum CourseProgressCategoryEnum: string
{
    case COMMITMENT = 'commitment';
    case ABSENT = 'absent';
    case ROADBLOCK = 'roadblock';

    public static function getAll(): array
    {
        return array_map(fn ($category) => $category->value, self::cases());
    }
}
