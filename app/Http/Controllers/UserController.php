<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        Gate::authorize('create', User::class);

        return 'you the admin';
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
