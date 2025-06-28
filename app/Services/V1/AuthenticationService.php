<?php

namespace App\Services\V1;

use Illuminate\Support\Facades\Hash;

class AuthenticationService
{
    public function matchPasswordHash(string $plain, string $hashed): bool
    {
        return Hash::check($plain, $hashed);
    }
}