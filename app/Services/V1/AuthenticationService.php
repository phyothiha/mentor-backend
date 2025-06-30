<?php

namespace App\Services\V1;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationService
{
    public function matchPasswordHash(string $plain, string $hashed): bool
    {
        return Hash::check($plain, $hashed);
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