<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => [
                ['id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'email' => 'a@a.hu'],
            ]
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
        ]);

        return to_route('users.index');
    }
}
