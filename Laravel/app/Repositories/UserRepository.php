<?php

namespace App\Repository;

use App\Models\User;

final class UserRepository
{
    public function create(string $email, string $password): void
    {
        $user = new User();
        $user->setAttribute('email', $email);
        $user->setAttribute('password', $password);
        $user->save();
    }
}
