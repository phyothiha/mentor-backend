<?php

namespace App\Services\V1;

use App\Models\User;

class UserService
{
    public function findBy(string $value, string $column = 'email'): null|User
    {
        return User::where($column, $value)->first();
    }
}