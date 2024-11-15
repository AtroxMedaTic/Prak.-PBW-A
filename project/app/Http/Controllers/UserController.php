<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use \App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', [
            'users' => $users,
        ]);

        /*
        return User::query()
            ->where('email', 'landnor@gmail.com')
            ->latest()
            ->get();
        */

        // return User::findMany([2,3]);

        /*
        Digunakan jika memang ada logic tertentu saja.

        return User::query()
            ->where('email', 'hamlewis@gmail.com')
            ->latest()
            ->get()
            ->map(fn($User) => [
                'name' => $User->name,
            ]); 
        */
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->validate([
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]));

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users/show', [
            'user' => $user,
        ]);
    }
}
