<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\LoginRequest;
use App\Http\Resources\V1\LoginUserResource;
use App\Services\V1\AuthenticationService;
use App\Services\V1\UserService;
use App\Traits\V1\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    use JsonResponse;

    public function __construct(
        protected AuthenticationService $authenticationService,
        protected UserService $userService,
    ) {
        //
    }

    public function login(LoginRequest $request)
    {
        $user = $this->userService->findBy($request->name, 'name');

        if (! $user || ! $this->authenticationService->matchPasswordHash($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'name' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->success(
            (new LoginUserResource($user))
                ->additional(['token' => $this->authenticationService->generateAuthToken($user)]),
            'Login successful.',
        );
    }

    public function logout(Request $request)
    {
        $this->authenticationService->revokeCurrentAuthToken($request->user());

        return $this->success(message: 'Logout successful.');
    }
}
