<?php

namespace App\Services\V1;

use App\Models\User;

class UserService
{
    public function findBy(string $value, string $column = 'email'): null|User
    {
        return User::where($column, $value)->first();
    }
    
    public function generateAuthToken(User $user): string
    {
        return $user->createToken($user->name, ['*'])->plainTextToken;
    }
    
    public function revokeCurrentAuthToken(User $user): bool
    {
        return $user->currentAccessToken()->delete();
    }
}