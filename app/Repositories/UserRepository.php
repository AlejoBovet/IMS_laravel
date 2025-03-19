<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function findByUsernameWithRol($username)
    {
        return User::where('username', $username)->with('rol')->first();
    }
}

