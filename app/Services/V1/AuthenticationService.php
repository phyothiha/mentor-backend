<?php

namespace App\Services\V1;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
