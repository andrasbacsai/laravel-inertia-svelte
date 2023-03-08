<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users', [
            'users' => [
                ['id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'email' => 'a@a.hu'],
            ]
        ]);
    }

    public function store(Request $request)
    {
        usleep(500000);
        $request->validate([
            'password' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
        ]);

        return to_route('users');
    }
}
