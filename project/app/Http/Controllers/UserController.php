<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use \App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use Pest\Mutate\Mutators\Visibility\FunctionProtectedToPrivate;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ],
        ]);
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());

        return to_route('users.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users/show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: ' . $user->name,
                'method' => 'put',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
            ],
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());

        return to_route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        // return redirect(route('users.index'));
        return to_route('users.index');
    }
}
