<?php

namespace App\Enums\V1;

enum RoleEnum: string
{
    // Users have Roles

    case ADMIN = 'admin';
    case MENTOR = 'mentor';
    case MENTEE = 'mentee';
}
