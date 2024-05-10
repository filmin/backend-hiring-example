<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateUserController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user->setAttribute('email', $email);
        $user->setAttribute('password', $password);
        $user->save();

        return new Response('User Created Successfully');
    }
}
